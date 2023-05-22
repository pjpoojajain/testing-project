@extends('layouts.app-master')

@section('content')
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<h2>Responsive Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

<div class="container">
  <form method="post" action="{{ route('inventory.perform') }}" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="row">
      <div class="col-25">
        <label for="title">Book Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="title" name="title" placeholder="Book title">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="description">Description</label>
      </div>
      <div class="col-75">
        <input type="text" id="description" name="description" placeholder="Book description">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="images">Images</label>
      </div>
      <div class="col-75">
        <input type="file" id="images" name="images[]" multiple>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="author">Author</label>
      </div>
      <div class="col-75">
        <input type="text" id="author" name="author" placeholder="Book author">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="category">Category</label>
      </div>
      <div class="col-75">
        <input type="text" id="category" name="category" placeholder="Book category">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="published_year">Published Year</label>
      </div>
      <div class="col-75">
        <input type="text" id="published_year" name="published_year" placeholder="Book published year">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="price">Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="price" name="price" placeholder="Book price">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="condition">Condition</label>
      </div>
      <div class="col-75">
        <input type="text" id="condition" name="condition" placeholder="Book condition">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="qty">Qty</label>
      </div>
      <div class="col-75">
        <input type="text" id="qty" name="qty" placeholder="Book qty">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

@endsection