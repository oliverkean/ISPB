@extends('pagelayout.dashboard_layout')
@section('title', 'Dashboard')

@section('css', 'manualcss/dashboard.css')
@section('content')
    <div class="container box_container">
       <div class="  box side text-center">
            <H1> Total Sales!</H1>
            <h2>Php: 6000</h2>
       </div>
       <div class=" box first">
        <div class="title">
            <h2 class="p3 text-center">Products on demand</h2>
        </div>
        
            <div class="mt-4 list_cont container">
                <ol >
                    <div class="container">
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                   
                    </div>
                    <div class="container">
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                    </div>
                    
                </ol>
            </div>
            
       </div>
       <div class=" box second">
        <div class="title">
            <h2 class="p3  text-center">Items on low</h2>
        </div>

            <div class="mt-4 list_cont container">
                <ol >
                    <div class="container">
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                   
                    </div>
                    <div class="container">
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                    </div>
                </ol>
            </div>
       </div>
       <div class=" box third">
        <div class="title">
            <h2 class="p3 text-center">Ongoing orders</h2>
        </div>

            <div class="mt-4 list_cont container">
                <ol >
                    <div class="container">
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                   
                    </div>
                    <div class="container">
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                    </div>
                </ol>
            </div>
       </div>
       <div class=" box fourth">
        <div class="title">
            <h2 class="p3 text-center">New arrivals</h2>
        </div>

            <div class="mt-4 list_cont container">
                <ol >
                    <div class="container">
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                   
                    </div>
                    <div class="container">
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                    </div>
                </ol>
            </div>
       </div>
    
    </div>

    <div class="container report">
        <h1 class="report-title">GENERATE REPORTS</h1>
        <div class="container inner_report">
            <div class="container  sales_report">
                <button type="submit" class="btn sales_btn btn-dark">Generate Sales report</button>
            </div>
            <div class="container inventory_report">
                <button type="submit" class="btn inv_btn btn-dark">Generate Inventory report</button>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br>
@endsection