# Preparation
1. setup and config XAMPP.
2. setup Composer & create laravel project.
3. start laravel project. Port: 8003.
4. setup Navicat & import table in it.
5. config .evn file to connect database.


# CRUD
1. create model called Tennis.php
2. create input form for user in E:\xampp\htdocs\myproj_laravel\resources\views.
3. create route for submitting form and add controller.
4. create controller and add CRUD function.

## Add & Request Validation
1. Visit website http://127.0.0.1:8003/home/form. <br>
2. Fill in the form.<br>
Request validation:   
Player, Country, Age, Points, Tournaments cannot be empty. <br><br>
If request is invalid, it will show "{"status_code":500,"message":"request error","data":["invalid information"]}". <br>
If request is valid, it will show "success!". 
```php
    public function showForm(){
        return view('form');
    }

    public function add(\App\Http\Requests\RequestValidation $request){
        $validated = $request->validated();
        $model = new Tennis();
        $res = $model::create($request -> all());
        echo 'success!';
    } 
```

## Search 
1. Visit website http://127.0.0.1:8003/home/search.
2. It will print the result which "Ranking" is "10".
```php
    public function search(Request $request){
        // search "name"="ggg" method 2
        $res = Tennis::where("Ranking","=","10") -> get();
        var_dump($res);
    }
```

## Update
1. Visit website http://127.0.0.1:8003/home/update.
2. It will change "Points" to "123" for all "Gender" is "women"
```php
    public function update(Request $request){
        $res = Tennis::where("Gender","=","women") -> update(['Points'=>'123']);
    }
```

## Delete
1. Visit website http://127.0.0.1:8003/home/delete.
2. It will delete all members which "Date" is "null".
```php
    public function delete(Request $request){
        $res = Tennis::where("Date","=",null) -> delete();
    }
```

# Pagination & Order
1. Create php file called "Page" in myproj_laravel\resources\views.
2. Edit this file to show all data which exists in database.
3. Create route for this page. Address: http://127.0.0.1:8003/home/page.
4. Add a function in controller. This function will show 10 results in each page, and order by "Tournaments" in ascending order.
```php
    public function page(){
        $data = Tennis::orderBy('Tournaments','ASC') -> paginate(10);
        return view('page',compact('data'));  
    }
```



