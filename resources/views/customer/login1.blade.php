<html>

    <head>
    
    </head>
    
    <body>
        
        <ul>
        
            @foreach($names as $name)

            <li> Hi, {{ $name->cust_name }} {{$name->reg_no}} {{$name->cust_class}}</li>
            
            @endforeach
            
        </ul>
    
    </body>

</html>