<?php /** @noinspection ALL */
namespace App\Http\Controllers;
use App\Http\Middleware\PreventRequestsDuringMaintenance;
use App\Models\ArchivedLeads;
use App\Models\Bucket;
use App\Models\BucketUser;
use App\Models\CallDispositionsService;
use App\Models\AttendanceLog;
use App\Models\Customer;
use App\Models\DNT;
use App\Models\Enquiry;
use App\Models\Inbox;
use App\Models\InboxNpiData;
use App\Models\LeadList;
use App\Models\MyList;
use App\Models\NpiData;
use App\Models\Team;
use App\Models\User;
use App\Models\Reminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\CallDisposition;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;
class DashboardController extends Controller
{
    /**
     * Home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $role = Auth::user()->role_id;
        if($role==1){
            return $this->admin_dashboard();
        } else {
            return $this->default();
        }
    }
    public function default()
    {
        $data['page_title'] = "User Dashboard - RCM";
        $data['sms_count'] = 50;
        $data['assigned_tasks'] = 0;
        $data['archived_tasks'] = 0;
        $data['incoming_sms_count'] = 50;
        $data['outgoing_sms_count'] = 30;
        $data['is_lead'] = 20;
        $data['is_invoice_sent'] = 10;
        $data['is_payment_received'] = 30;
        $data['is_document_received'] =  12;
        $data['is_credentialing_in_process'] = 11;
        $data['is_credentialed_contracted'] = 36;
        $data['harray']= $harray;
        $data['incoming_sms']=$incoming_sms;
        $data['outgoing_sms']=$outgoing_sms;
        return view('dashboard.user_dashboard',$data);
    }
    public function admin_dashboard()
    {
        $data['page_title'] = "Admin Dashboard - RCM";
        $data['incoming_sms_count'] = 20;
        $data['outgoing_sms_count'] = 30;
        $data['is_lead'] = 10;
        $data['is_invoice_sent'] = 12;
        $data['is_payment_received'] = 15;
        $data['is_document_received'] =  18;
        $data['is_credentialing_in_process'] = 22;
        $data['is_credentialed_contracted'] = 25;
        $data['harray']=50;
        $data['incoming_sms']=60;
        $data['outgoing_sms']=70;
        return view('dashboard.admin_dashboard', $data);
    }
}
