<?php
namespace App\Http\Controllers;
use App\Models\CallDispositionsDid;
use App\Models\CapturedUser;
use App\Models\Department;
use App\Models\ManagerialRole;
use App\Models\RolePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\UserRole;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user() && Auth::user()->user_id){
            return redirect('/');
        }
        $data['page_title'] = "Doctors - Login";
        return view('Auth.login_form',$data);
    }
    public function list()
    {
        if(Auth::user()->role_id !== 1){

            abort(403);
        }

        $data['page_title'] = "Users List";
       // $data['departments'] = Department::where('status', 1)->get();
        $data['user_lists'] = User::where('status' , 1)->get();
        return view('users.user_list', $data);
    }
    public function user_form(Request $request)
    {
        if(Auth::user()->role_id !== 1){

            abort(403);
        }
        $data['page_title'] = "User Form";
        if(isset($request->user_id)){
            $data['user'] = User::where('user_id',$request->user_id)->get()[0];
        } else {
            $data['user'] = false;
        }
        $data['user_role']=UserRole::get();
        return view('users.user_form',$data);
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->passes()) {
            $user = User::where([
                'email'=>$request->input('email'),
                'password'=>$this->encrypt_password($request->input('password')),
                'status'=>1
            ])->first();
            if($user) {
                Auth::login($user);
                $response['status'] = "Success";
                $response['result'] = "Logged In";
            } else {
                $response['status'] = "Failure";
                $response['result'] = "Invalid email or password";
            }
        } else {
            $response['status'] = "Failure!";
            $response['result'] = $validator->errors()->toJson();
        }
        return response()->json($response);
    }
    public function save(Request $request){
        if($request->user_id){
            $validator = Validator::make($request->all(), [
                'full_name' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'full_name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'required',
            ]);
        }
        if($validator->passes()){
            if(isset($request->user_id)){
                User::where('user_id', $request->user_id)->update([
                    'full_name' => $request->full_name,
                ]);
            } else {
                $user = new User;
                $user->added_by = Auth::user()->user_id;
                $user->full_name = $request->full_name;
                $user->email = $request->email;
                $user->password = $this->encrypt_password($request->input('password'));
                $user->role_id = $request->role_id;
                $user->save();
            }
            $response['status'] = 'Success';
            $response['result'] = 'Added Successfully';
        } else{
            $response['status']= 'failure';
            $response['result'] = $validator->errors()->toJson();
        }
        return response()->json($response);
    }
    Public function delete(Request $request)
    {
        $role = User::where('user_id', $request->user_id)->update([
            'status' => 0,
        ]);
        $response['status'] = "Success";
        $response['result'] = "Deleted Successfully";
        return response()->json($response);
    }
    public function role_list(){
        if(Auth::user()->role_id !== 1){
            abort(403);
        }
        $data['page_title'] = "User Roles";
        $data['user_roles'] = UserRole::with('added_by_user')->whereStatus(1)->get();
        return view('users.role_list',$data);
    }
    public function save_roles(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:user_roles,title,'.$request->role_id.',role_id'
        ]);
        if($validator->passes()) {
            if ($request->role_id){
                UserRole::whereRoleId($request->role_id)->update([
                    "title" => $request->title,
                    "modified_by" => Auth::user()->role_id,
                    "modified_on" => get_date_time(),
                ]);
            }
            else{
                UserRole::create([
                    "title" => $request->title,
                    "added_by" => Auth::user()->role_id,
                    "added_on" => get_date_time(),
                ]);
            }
            $response['status'] = 'success';
            $response['result'] = 'Added SuccessFully';
        }else{
            $response['status']= 'failure';
            $response['result'] = $validator->errors()->toJson();
        }
        return response()->json($response);
    }

    public function role_form(Request $request){
        if ($request->role_id){
            $data['user_role']=UserRole::whereRoleId($request->role_id)->first();
        }
        else{
            $data['user_role']=null;
        }
        return view('users.role_form',$data);
    }
    public function role_delete(Request $request){
        UserRole::whereRoleId($request->role_id)->update([
           'status'=>0
        ]);
        $response['status']='success';
        $response['result']='Deleted SuccessFully';
        return response()->json($response);
    }
    public function logout()
    {
        Auth::logout();
        Session::put('permissions', false);
        return redirect('login');
    }
    public function change_password(Request $request)
    {
        User::where('user_id', $request->user_id)->update([
            'password' => $this->encrypt_password($request->password)
        ]);
        $response['status'] = "Success";
        $response['result'] = "Password Updated Successfully";
        return response()->json($response);
    }
    public function edit_profile(Request $request){
        $data['page_title'] = "User Profile Edit - Atlantis BPO CRM";
        if(isset($request->user_id)){
            $data['user'] = User::where('user_id',$request->user_id)->first();
        } else {
            $data['user'] = false;
        }
        return view('Auth.edit_profile',$data);
    }
    public function save_profile_changes(Request $request){
        if($request->user_id){
            $validator = Validator::make($request->all(), [
                'full_name' => 'required',
                'postal_address' => 'required',
                'contact_number' => 'required',
                'current_password'=> 'required'
            ]);
            $check_curr_pass = User::where([
                'user_id'=>$request->user_id,
                'password'=>$this->encrypt_password($request->current_password)])->count();
            if($validator->passes()){
                if($check_curr_pass > 0){
                    User::where('user_id', $request->user_id)->update([
                        'full_name' => $request->full_name,
                        'contact_number' => $request->contact_number,
                        'postal_address' => $request->postal_address
                    ]);
                    $response['status'] = "Success";
                    $response['result'] = "User Profile Updated Successfully";
                }else{
                    $response['status']= 'failure';
                    $response['result'] = "Current Password Provided Doesn't match with Database Stored Password";
                }
            }else{
                $response['status']= 'failure';
                $response['result'] = $validator->errors()->toJson();
            }
            if($request->password){ // password_confirmation
                $validator = Validator::make($request->all(), [
                    'full_name' => 'required',
                    'postal_address' => 'required',
                    'contact_number' => 'required',
                    'password' => 'required|confirmed',
                    'password_confirmation' => 'required',
                    'current_password'=> 'required'
                ]);
                if($validator->passes() && $request->password == $request->password_confirmation && $check_curr_pass > 0) {
                    User::where('user_id', $request->user_id)->update([
                        'full_name' => $request->full_name,
                        'contact_number' => $request->contact_number,
                        'postal_address' => $request->postal_address,
                        'password' => $this->encrypt_password($request->password)
                    ]);
                    $response['status'] = "Success";
                    $response['result'] = "User Profile Updated Successfully";
                }else{
                    $response['status']= 'failure';
                    $response['result'] = $validator->errors()->toJson();
                }
            }
            if($request->file('user_image')) {
                $file = $request->file('user_image');
                $user_image = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('user_images'), $user_image);
                User::where('user_id', $request->user_id)->update(['image' => $user_image]);
            }
            return response()->json($response);
        }
    }
    public function change_pass(Request $request)
    {
        $check_curr_pass = User::where(['user_id'=>$request->user_id,
            'password'=>$this->encrypt_password($request->curr_password)])->count();
        $validator = Validator::make($request->all(), [
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'curr_password' => 'required'
        ]);
        if($validator->passes()) {
            if($check_curr_pass > 0){
                User::where('user_id', $request->user_id)->update([
                    'password' => $this->encrypt_password($request->password)
                ]);
                $response['status'] = "Success";
                $response['result'] = "Password Updated Successfully";
            }else{
                $response['status']= 'failure';
                $response['result'] = "Current Password doesn't Match";
            }
            return response()->json($response);
        }else{
            $response['status']= 'failure';
            $response['result'] = 'The password confirmation does not match.';
        }
        return response()->json($response);
    }
    public function captureUser(Request $request){
        CapturedUser::create([
           'user_email'=>Auth::user()->email,
            'page_url'=> $request->page_url,
            'added_on'=>get_date_time()
        ]);
        $response['status']='success';
        $response['result']='Done';
        return $response;
    }
    /****** VENDORS *******/
    public function vendors_list()
    {
        $data['page_title'] = "Vendors List - Atlantis BPO CRM";
        $data['user_lists'] = User::where('status' , 1)->where('role_id', 13)->get();
        $data['user_roles'] = UserRole::where('status',1)->where('role_id', 13)->first();
        $data['dids'] = CallDispositionsDid::where('status', 1)->get();
        if(isset($request->user_id)){
            $data['user'] = User::where('user_id',$request->user_id)->first();
        }
        return view('vendors.vendor_list', $data);
    }
    public function vendor_form(Request $request)
    {
        $data['page_title'] = "Vendors List - Atlantis BPO CRM";
        $data['user_roles'] = UserRole::where('status',1)->where('role_id', 13)->get();
        $data['dids'] = CallDispositionsDid::where('status', 1)->get();
        if(isset($request->user_id)){
            $data['user'] = User::where('user_id',$request->user_id)->first();
        }
        return view('vendors.vendor_form',$data);
    }
    public function vendor_save(Request $request){
        if($request->user_id){
            $validator = Validator::make($request->all(), [
                'full_name' => 'required',
                "images" => "image|mimes:png,gif,jpeg,jpg|max:1024",
                'gender' => 'required',
                'postal_address' => 'required',
                'contact_number' => 'required',
                'vendor_did_id' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'full_name' => 'required',
                'email' => 'required',
                "images" => "image|mimes:png,gif,jpeg,jpg|max:1024",
                'password' => 'required|unique:users,email',
                'gender' => 'required',
                'postal_address' => 'required',
                'contact_number' => 'required',
                'vendor_did_id' => 'required',
            ]);
        }
        if($validator->passes()){
            $vendor_did_id = implode(",", $request->vendor_did_id);
            $user_data = [
                'full_name' => $request->full_name,
                'role_id' => 13,
                'vendor_did_id' => $vendor_did_id,
                'gender' => $request->gender,
                'contact_number' => $request->contact_number,
                'postal_address' => $request->postal_address,
                'user_type' => 'System User',
            ];
            if(isset($request->user_id)){
                User::where('user_id', $request->user_id)->update($user_data);
            } else {
                $user_image = "";
                if($request->file('image')) {
                    $file = $request->file('image');
                    $user_image = time() . rand(1, 100) . '.' . $file->extension();
                    $file->move(public_path('user_images'), $user_image);
                }
                $user_data['password'] =  $this->encrypt_password($request->input('password'));
                $user_data['email'] = $request->email;
                $user_data['image'] = $user_image;
                User::create($user_data);
            }
            $response['status'] = 'Success';
            $response['result'] = 'Added Successfully';
        } else{
            $response['status']= 'failure';
            $response['result'] = $validator->errors()->toJson();
        }
        return response()->json($response);
    }
    // encrypt password
    private function encrypt_password($password)
    {
        return sha1(md5($password . 'Looper$alt'));
    }
}
