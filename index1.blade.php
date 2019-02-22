<html>
<body>
<header><h1>This is header</h1></header>
<content>
<table>
<th>
<td>productid</td>
<td>productname</td>
<td>description</td>
<td>price</td>
</th>
@foreach($list as $product)
   <tr>
   <td>{{$product->productid}}</td>
   <td>{{$product->productname}}</td>
   <td>{{$product->description}}</td>
   <td>{{$product->price}}</td>
   </tr>
@endforeach
</table>
</content>
<footer><h1>This is footer</h1></footer>
</body>
</html>