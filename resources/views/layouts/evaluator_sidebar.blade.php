<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                @if (\Auth::guard('evaluator')->check())
                    <img src="{{ Avatar::create(\Auth::guard('evaluator')->user()->nama)->toBase64() }}"
                         class="img-circle" alt="User Image">
                @endif
            </div>
            <div class="pull-left info">
                @if (\Auth::guard('evaluator')->check())
                    <p>{{ \Auth::guard('evaluator')->user()->nama }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                @endif
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{ url('/evaluator') }}"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
            <li><a href="{{ url('/evaluator/penilaian') }}"><i class="fa fa-file-pdf-o"></i> <span>Penilaian</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>