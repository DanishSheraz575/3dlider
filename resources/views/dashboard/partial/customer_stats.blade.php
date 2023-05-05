<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex" onclick="customer_stat_redirect('is_lead')">
        <div class="card gradient-blackberry">
            <div class="card-content">
                <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                            <h3 class="font-large-1 mb-0">{{$is_lead}}</h3>
                            <span>Customer</span>
                        </div>
                    </div>
                </div>
                <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex" onclick="customer_stat_redirect('is_invoice_sent')">
        <div class="card gradient-ibiza-sunset">
            <div class="card-content">
                <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                            <h3 class="font-large-1 mb-0">{{$is_invoice_sent}}</h3>
                            <span>Invoice Sent</span>
                        </div>
                    </div>
                </div>
                <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex" onclick="customer_stat_redirect('is_payment_received')">
        <div class="card gradient-green-tea">
            <div class="card-content">
                <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                            <h3 class="font-large-1 mb-0">{{$is_payment_received}}</h3>
                            <span>Payment Received</span>
                        </div>
                    </div>
                </div>
                <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex" onclick="customer_stat_redirect('is_document_received')">
        <div class="card gradient-pomegranate">
            <div class="card-content">
                <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                            <h3 class="font-large-1 mb-0">{{$is_document_received}}</h3>
                            <span>Document Received</span>
                        </div>
                    </div>
                </div>
                <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex" onclick="customer_stat_redirect('is_credentialing_in_process')">
        <div class="card gradient-plum">
            <div class="card-content">
                <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                            <h3 class="font-large-1 mb-0">{{$is_credentialing_in_process}}</h3>
                            <span>Credentialing In-Process</span>
                        </div>
                    </div>
                </div>
                <div id="Widget-line-chart4" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex" onclick="customer_stat_redirect('is_credentialed_contracted')">
        <div class="card gradient-passion-fruit">
            <div class="card-content">
                <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                            <h3 class="font-large-1 mb-0">{{$is_credentialed_contracted}}</h3>
                            <span>Credential Contracted</span>
                        </div>
                    </div>
                </div>
                <div id="Widget-line-chart5" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex" >
        <div class="card gradient-sublime-vivid">
            <div class="card-content">
                <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                            <h3 class="font-large-1 mb-0">{{$outgoing_sms_count}}</h3>
                            <span>Message Sent</span>
                        </div>
                    </div>
                </div>
                <div id="Widget-line-chart6" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
        <div class="card gradient-king-yna">
            <div class="card-content">
                <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                            <h3 class="font-large-1 mb-0">{{$incoming_sms_count}}</h3>
                            <span>Message Received</span>
                        </div>
                    </div>
                </div>
                <div id="Widget-line-chart7" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
        <div class="card gradient-crystal-clear">
            <div class="card-content">
                <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                            <h3 class="font-large-1 mb-0">0</h3>
                            <span>NILL</span>
                        </div>
                    </div>
                </div>
                <div id="Widget-line-chart8" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                </div>
            </div>
        </div>
    </div>
</div>
