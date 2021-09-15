<aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" style="width: 50px; height: 50px; @media screen(max-width: 40px; max-height: 40px;)" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ Auth()->user()->nama_petugas }}</p>
          <p class="app-sidebar__user-designation">{{ Auth()->user()->level }}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ url('admin/halaman_admin') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Fitur CRUD</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('asSiswa.index') }}"><i class="icon fa fa-user"></i>CRUD Data Siswa</a></li>
             <li><a class="treeview-item" href="{{ route('asPetugas.index') }}"><i class="icon fa fa-user"></i>CRUD Data Petugas</a></li>
             <li><a class="treeview-item" href="{{ route('asClass.index') }}"><i class="icon fa fa-list"></i>CRUD Data Kelas</a></li>
             <li><a class="treeview-item" href="{{ route('asSpp.index') }}"><i class="icon fa fa-bank"></i>CRUD Data SPP</a></li>
          </ul>
        </li>
           <li><a class="app-menu__item" href="{{ route('asPembayaran.index') }}"><i class="app-menu__icon fa fa-money"></i><span class="app-menu__label">Entri Transaksi Pembayaran</span></a></li>
           <li><a class="app-menu__item" href="{{ route('asHistori.index') }}"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Lihat History Pembayaran</span></a></li>
           <li><a class="app-menu__item" href="{{ url('admin/pdf/index') }}"><i class="app-menu__icon fa fa-book  "></i><span class="app-menu__label">Generate Laporan</span></a></li>
            <li><a class="app-menu__item" href="{{ route('asSaran.index') }}"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Kritik & Saran</span></a></li>
      </ul>

    </aside>