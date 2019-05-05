<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
            @if (\Auth::guard('web')->check())
                <!--
                    <img src="{{ Avatar::create(\Auth::user()->name)->toBase64() }}"
                         class="img-circle" alt="User Image">
                         -->
                    <img src="{{ asset('images/profileUser.JPG') }}"
                         class="img-circle" alt="User Image">
                @endif
            </div>
            <div class="pull-left info">
                @if(\Auth::guard('web')->check())
                    <p>{{ \Auth::guard('web')->user()->name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                @endif
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{ url('/administrator/') }}"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
            <li><a href="{{ url('/administrator/satuan-kerja') }}"><i class="fa fa-building"></i>
                    <span>Satuan Kerja</span></a></li>
            <li><a href="{{ url('/administrator/satuan-kerja/petugas') }}"><i class="fa fa-users"></i> <span>Petugas Satuan Kerja</span></a>
            </li>
            <li><a href="{{ url('/administrator/evaluator') }}"><i class="fa fa-user-secret"></i> <span>Evaluator</span></a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>