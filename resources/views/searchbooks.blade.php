<html>
    <head>
    <link  rel="stylesheet" type="text/css"href="{{url('css/login.css')}}" >
        <body>
            <style>
           body{
            background-color:black;
            
}
            </style>
   </head>
<body>
    <div class="">
      
        <h1>Search Everything</h1>
        <div class="row">
            <div>
               
               <form action="{{ route('web.search') }}" method="GET">
          
                  <div class="input__box">
                     <label>Enter keyword</label>
                     <input type="text"  name="query" placeholder="Search here....." value="{{ request()->input('query') }}">
                     <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                  </div>
                  <div class="input_box">
                   <button type="submit" class="btn btn-primary">Search</button>
                  </div>
               </form>
               <br>
               <br>
               <hr>
               <br>
               @if(isset($books))
  
                 <table>
                     <thead>
                         <tr>
                             
                             <th>title</th>
                             <th>description</th>
                             <th>genre</th>
                             <th>price</th>
                         </tr>
                     </thead>
                     <tbody>
                         @if(count($books) > 0)
                             @foreach($books as $book)
                                <tr>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->description }}</td>
                                    <td>{{ $book->genre }}</td>
                                    <td>{{ $book->price}}</td>
                                    
                                    
                                </tr>
                             @endforeach
                         @else
  
                            <tr><td>No result found!</td></tr>
                         @endif
                     </tbody>
                 </table>
  
                 
                   
                 </div>
  
               @endif
            </div>
         </div>
    </div>
</body>
</html>