@extends('layouts.master')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<table id="showData" class="tavle">
<tr>

    <th>level 1</th>
    <th>level 2</th>
    <th>level 3</th>
</tr>


<script>

data = [
    {
       "id": 457,
       "name": "name1",
       "code": "url1",
       "show_code": "url1",
       "icon": null,
       "image": null,
       "productsCount": 1,
       "items": [
          {
             "id": 460,
             "name": "name2",
             "code": "url2",
             "show_code": "url2",
             "icon": null,
             "image": null,
             "productsCount": 1
          },
          {
             "id": 458,
             "name": "name3",
             "code": "url3",
             "show_code": "url3",
             "icon": null,
             "image": null,
             "productsCount": 1,
             "items": [
                {
                   "id": 743,
                   "name": "name4",
                   "code": "url4",
                   "show_code": "url4",
                   "icon": null,
                   "image": null,
                   "productsCount": 1
                }
              ]
           }
        ]
     }
 ]
            
 $(document).ready(function(){
 
    var product_data = '';
 $.each(data, function (i, data) {
     $.each(data.items, function (i, items) {
         $.each(items.items, function (i, item) { 
         product_data += '<tr>';
             product_data += '<td class="nav-submenu css-n9ebcy-Item">  <a class="code-parent" target="_blank" href="test' + data.code + '">' + data.name + '(' + data.id + ')' + '</a></td>';     
             product_data += '<td class="child-item"><a class="code-child" target="_blank" href="test' +
                       items.code + '/' + items.show_code + '">' + items.name + ' ' + '(' + items
                       .productsCount  +
                       ')' + '</a></td>';                     
                       for(var i=0; i<items.items.length;i++){
                         product_data += '<td>' + items.items[i].name + '</td>';
                         }
             
                     //   product_data += '<td class="child-item"><a class="code-child" target="_blank" href="https://test' +
                     //   items.items.code + '</a></td>';
                       product_data += '</tr>';
 });
 });    
 });    
    
 $('#showData').append(product_data);
 
 });</script>
@endsection