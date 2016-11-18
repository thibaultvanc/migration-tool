<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">
    {!! \Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
    {!! \Html::style('/node_modules/material-design-lite/material.min.css') !!}
  <!-- Scripts -->
  <script>


window.Laravel =  @php echo json_encode([
  'csrfToken' => csrf_token(),
  'stripeKey' => config('services.stripe.key'),
  'organization_id' => session('organization_id') ?: config('picaflor.organizationList')['europe'],
]);
@endphp





  </script>
</head>
<body>
  <div id="app">


  <nav class="nav">
    <div class="nav-left">
      <a class="nav-item is-brand" href="/">
        {{-- <img src="http://bulma.io/images/bulma-type.png" alt="Bulma logo"> --}}
        <i class="material-icons">view_day</i>
        <i class="material-icons">navigate_next</i>
        <i class="material-icons">view_day</i>


          <h1 class="subtitle is-colored">&nbsp;&nbsp;Migration Tool</h1>
      </a>
    </div>

    <div class="nav-center">
      <span class="nav-item">
        <form class="" name="selectProject" action="/select_project" method="post">
          {{csrf_field()}}
          <select class="select-project" name="project_id">
            <option value="placeholder">
              select a Project
            </option>
            @foreach ($data['projectList'] as $project)
              <option value="{{$project->id}}" @if ($data['project_id']==$project->id) selected @endif>
                {{$project->name}}
              </option>
            @endforeach
          </select>
        </form>
      </span>
      {{-- <a class="nav-item" href="#">
        <i class="material-icons">view_day</i>
        <i class="material-icons">navigate_next</i>
        <i class="material-icons">view_day</i>
      </a> --}}
      {{-- <a class="nav-item" href="#">
        <span class="icon">
          <i class="fa fa-twitter"></i>
        </span>
      </a> --}}
    </div>

    <span class="nav-toggle" @click.prevent="openMobileMenu">
      <span></span>
      <span></span>
      <span></span>
    </span>

    <div class="nav-right nav-menu">

      @if (Auth::guest())
        <span class="nav-item">
          <a class="button" href="{{ url('/login') }}" disabled>
            {{-- <span class="icon">
              <i class="fa fa-twitter"></i>
            </span> --}}
            <span>Syncronize 2 databases</span>
          </a>

        </span>
      @else
        <a class="nav-item" href="{{route('user.edit', Auth::user()->id)}}">
          {{ Auth::user()->name }}
        </a>




        <select class="nav-item" v-model="organization">
          <option v-for="org in organizationList" :value="org.organization_id">@{{org.name}} - @{{org.organization_id}}</option>
        <select>

          <a href="{{ url('/logout') }}" class="nav-item"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="material-icons">power_settings_new</i>
        </a>

        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>



      @endif

    </div>
  </nav>













{{--


<div class="columns">
<aside class="column is-4 aside hero is-fullheight is-hidden-mobile">
      <div>
        <div class="main">
          <div class="title">Main</div>
          <a href="#" class="item active"><span class="icon"><i class="fa fa-home"></i></span><span class="name">Dashboard</span></a>
          <a href="#" class="item"><span class="icon"><i class="fa fa-map-marker"></i></span><span class="name">Activity</span></a>
          <a href="#" class="item"><span class="icon"><i class="fa fa-th-list"></i></span><span class="name">Timeline</span></a>
          <a href="#" class="item"><span class="icon"><i class="fa fa-folder-o"></i></span><span class="name">Folders</span></a>
        </div>
      </div>
    </aside>



    <div class="column is-8">

    </div>

</div>

{{--  --}}





  <div class="columns">
        <aside class="column is-3 is-fullheight menu" >
          <br>
          <p class="menu-label">
            Inittialize
          </p>
          <ul class="menu-list">
            <ul>
              <li>
                <a href="/initialSettiings" class="">
                  {{-- <span class="icon"><i class="fa fa-users"></i></span> --}}
                  <span class="name">Settings</span></a>
              </li>
              <li>
                <a href="/admin/zoho/organization/{{session('organization_id')}}/contacts" class="">
                  {{-- <span class="icon"><i class="fa fa-users"></i></span> --}}
                  <span class="name">Customers</span></a>
              </li>
              {{-- <li>
                <a href="/admin/zoho/organization/{{session('organization_id')}}/invoices" class="{{isTitleActive('invoices')}}">
                  <span class="icon"><i class="fa fa-file-text-o"></i></span>
                  <span class="name">Invoices</span></a>
              </li>
              <li>
                <a href="/admin/zoho/organization/{{session('organization_id')}}/payments" class="{{isTitleActive('payments')}}">
                  <span class="icon"><i class="fa fa-money"></i></span>
                  <span class="name">Payments</span></a>
              </li>
              <li>
                <a href="/admin/zoho/organization/{{session('organization_id')}}/items" class="{{isTitleActive('items')}}">
                  <span class="icon"><i class="fa fa-product-hunt"></i></span>
                  <span class="name">Products</span></a>
              </li> --}}


          <!--

              <li><span class="icon"><i class="fa fa-home"></i></span><a :href="'/admin/zoho/organization/{{session('organization_id')}}/contacts'">Customers</a></li>
              <li ><a :href="'/admin/zoho/organization/{{session('organization_id')}}/invoices'">Invoices</a></li>
              <li ><a :href="'/admin/zoho/organization/{{session('organization_id')}}/payments'">Payments</a></li>
              <li ><a :href="'/admin/zoho/organization/{{session('organization_id')}}/items'">Items</a></li> -->
              <!-- <li><a href="/admin/zoho/invoices">Transactions</a></li> -->
            </ul>
          </ul>

        </aside>
        <div class="column  is-9">
          @if (count($errors) > 0)
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif



            @yield('content')
        </div>
      </div>



{{--


  <section class="section">
      <div class="container">
        <div class="heading">
          <h1 class="title">Section</h1>
          <h2 class="subtitle">
            A simple container to divide your page into <strong>sections</strong>, like the one youre currently reading
          </h2>
        </div>
      </div>
    </section> --}}


  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <strong></strong> by <a href="http://organit.fr">Organit</a>
          &mdash;
          <a class="icon" href="https://github.com/jgthms/bulma">
            <i class="fa fa-github"></i>
          </a>
        </p>
      </div>
    </div>
  </footer>
</div>

<!-- Scripts -->
@yield('footer_scripts')
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
<script>
  $('.select-project').change(function()
  {
    $('form[name=selectProject]').submit()
  })
</script>
</body>
</html>
