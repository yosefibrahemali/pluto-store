@include('layouts.app')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Home</a>                    
                <span></span> orders
            </div>
        </div>
    </div>
   
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Your Orders</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                
                           
                            <tr>
                                <td>#00{{$order->id}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->stock_status}}</td>
                                <td>{{$order->total}}LYD</td>
                                
                            </tr>
                             @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
   
</main>