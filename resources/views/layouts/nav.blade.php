<nav class="main-nav float-right d-none d-lg-block">
    <ul>
      <li class="active"><a href="#intro">Home</a></li>
      <li><a href="#about">About Us</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
    </ul>
  </nav>
@if(Session::has('success'))
<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    {{ Session::get('success') }}
</div>
@endif
