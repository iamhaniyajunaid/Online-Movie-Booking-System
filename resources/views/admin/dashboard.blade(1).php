@extends('layouts.admin')
@section('title','Dashboard')
@section('page-title','Dashboard')
@section('content')
<div class="mb-4"><h2>Dashboard</h2><p class="text-muted">Movie website overview</p></div>
<div class="row g-3 mb-4">
<div class="col-md-3"><div class="card-box"><small>Total Movies</small><h3>25</h3></div></div>
<div class="col-md-3"><div class="card-box"><small>Shows</small><h3>12</h3></div></div>
<div class="col-md-3"><div class="card-box"><small>Bookings</small><h3>348</h3></div></div>
<div class="col-md-3"><div class="card-box"><small>Users</small><h3>120</h3></div></div>
</div>
<div class="card border-0 shadow-sm">
<div class="card-header bg-white"><b>Recent Movies</b></div>
<div class="table-responsive"><table class="table mb-0">
<thead><tr><th>Movie</th><th>Genre</th><th>Release Date</th><th>Status</th></tr></thead>
<tbody>
<tr><td>Movie Name 1</td><td>Action</td><td>20 Aug 2026</td><td><span class="badge bg-success">Active</span></td></tr>
<tr><td>Movie Name 2</td><td>Drama</td><td>18 Aug 2026</td><td><span class="badge bg-success">Active</span></td></tr>
<tr><td>Movie Name 3</td><td>Comedy</td><td>15 Aug 2026</td><td><span class="badge bg-secondary">Inactive</span></td></tr>
</tbody></table></div></div>
@endsection