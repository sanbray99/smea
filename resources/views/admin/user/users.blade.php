@extends('admin.layouts.header')
{{--  --}}
@section('content')
<!-- CONTENT -->
<section id="content">
  <!-- NAVBAR -->
  <nav>
    <i class='bx bx-menu' ></i>
    <a href="#" class="nav-link">Categories</a>
    <form action="#">
      <div class="form-input">
        <input type="search" placeholder="Search...">
        <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
      </div>
    </form>
    {{-- <input type="checkbox" id="switch-mode" hidden>
    <label for="switch-mode" class="switch-mode"></label> --}}
    <a href="#" class="notification">
      <i class='bx bxs-bell' ></i>
      <span class="num">8</span>
    </a>
    <a href="#" class="profile">
      <img src="img/people.png">
    </a>
  </nav>
  <!-- NAVBAR -->

  <!-- MAIN -->
  <main>
    <div class="head-title">
      <div class="left">
        <h1>User</h1>
        <ul class="breadcrumb">
          <li>
            <a href="#">User</a>
          </li>
          <li><i class='bx bx-chevron-right' ></i></li>
          <li>
            <a class="active" href="#">Home</a>
          </li>
        </ul>
      </div>
      <a href="#" class="btn-download">
        <i class='bx bxs-cloud-download' ></i>
        <span class="text">Download PDF</span>
      </a>
    </div>

    


    <div class="table-data ">
      <div class="order">
        <a href="admin-tambahusers" class="tambahbtn btn__">
          <i class='bx bx-folder-plus'></i>
          <span class="text">Tambah Data</span>
        </a>
        <div class="head mt-5">
          <h3>Jumlah Guru</h3>
          <i class='bx bx-search' ></i>
          <i class='bx bx-filter' ></i>
        </div>
        <table>
          <thead>
            <tr>
              {{-- <th>No</th> --}}
              <th>Username</th>
              <th>Email</th>
              <th>Password</th>
              <th>Aksi</th>
              
              
            </tr>
          </thead>
          <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($user as $row)
            <tr>
              {{-- <td>{{$no++}}</td> --}}
              <td>
                <img  src="{{asset(''.$row->foto)}}">
                <p>{{$row->name}}</p>
              </td>
              <td>{{$row->eamil}}</td>
              <td>{{$row->password}}</td>
              <td>p</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <div class="link">
          {{ $user->links('admin.layouts.paginator') }}
        </div>
      </div>
      
    </div>


    {{-- <section id="formtambah">
        <div class="container">
          <form>
            <div class="row">
              <h4>Account</h4>
              <div class="input-group input-group-icon">
                <input type="text" placeholder="Full Name"/>
                <div class="input-icon"><i class="fa fa-user"></i></div>
              </div>
              <div class="input-group input-group-icon">
                <input type="email" placeholder="Email Adress"/>
                <div class="input-icon"><i class="fa fa-envelope"></i></div>
              </div>
              <div class="input-group input-group-icon">
                <input type="password" placeholder="Password"/>
                <div class="input-icon"><i class="fa fa-key"></i></div>
              </div>
            </div>
            
          </form>
        </div>
    </section> --}}


  </main>
  <!-- MAIN -->
</section>
<!-- CONTENT -->

@endsection

