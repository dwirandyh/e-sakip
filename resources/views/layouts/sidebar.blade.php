<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
            @if (\Auth::guard('petugas')->check())
                <!--
                    <img src="{{ Avatar::create(\Auth::guard('petugas')->user()->nama)->toBase64() }}"
                         class="img-circle" alt="User Image">
                         -->
                    <img src="{{ asset('/images/profilUser.JPG') }}"
                         class="img-circle" alt="User Image">
                @endif
            </div>
            <div class="pull-left info">
                @if (\Auth::guard('petugas')->check())
                    <p>{{ \Auth::guard('petugas')->user()->nama }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                @endif
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
            <li><a href="{{ url('/penilaian') }}"><i class="fa fa-file-pdf-o"></i> <span>Penilaian</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>