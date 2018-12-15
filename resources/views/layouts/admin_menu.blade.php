<div class="container">
    <ul class="mainnav">
        <li class="{{(route::is('admin')) ? 'active': ''}}"><a href="{{route('admin')}}"><i class="icon-signal"></i><span>Dashboard</span> </a> </li>
        <li class="{{(route::is('drivers')) ? 'active': ''}}"><a href="{{route('drivers')}}"><i class="icon-dashboard"></i><span>Drivers</span> </a> </li>
        <li class="{{(route::is('passengers')) ? 'active': ''}}"><a href="{{route('passengers')}}"><i class="icon-group"></i><span>Passengers</span> </a> </li>
        <li class="{{(route::is('vehicles')) ? 'active': ''}}"><a href="{{route('vehicles')}}"><i class="icon-truck"></i><span>Vehicles</span> </a> </li>
        <li class="{{(route::is('rides')) ? 'active': ''}}"><a href="{{route('rides')}}"><i class="icon-road"></i><span>Rides</span> </a> </li>
        <li class="{{(route::is('bookings')) ? 'active': ''}}"><a href="{{route('bookings')}}"><i class="icon-tag"></i><span>Bookings</span> </a> </li>
        <li class="{{(route::is('transactions')) ? 'active': ''}}"><a href="{{route('transactions')}}"><i class="icon-money"></i><span>Transactions</span> </a> </li>
        <li class="{{(route::is('messages')) ? 'active': ''}}"><a href="{{route('messages')}}"><i class="icon-envelope"></i><span>Messages</span> </a> </li>
        {{--<li><a href="reports.html"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>--}}
        {{--<li><a href="guidely.html"><i class="icon-facetime-video"></i><span>App Tour</span> </a></li>--}}
        {{--<li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>--}}
        {{--<li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>--}}
        {{--<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>--}}
        {{--<ul class="dropdown-menu">--}}
        {{--<li><a href="icons.html">Icons</a></li>--}}
        {{--<li><a href="faq.html">FAQ</a></li>--}}
        {{--<li><a href="pricing.html">Pricing Plans</a></li>--}}
        {{--<li><a href="login.html">Login</a></li>--}}
        {{--<li><a href="signup.html">Signup</a></li>--}}
        {{--<li><a href="error.html">404</a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
    </ul>
</div>