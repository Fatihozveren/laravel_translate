<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="{{asset('front/css/main.css')}}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>
        @yield('title')
    </title>
    <link rel="shortcut icon" href="{{asset('front/images/fatih.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('front/images/fatih.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body style="background-color: black">
@yield('content')

<div class="footer">
        <p>2022 © <a href="http://www.fatihozveren.com">Fatih Özveren</a></p>
</div>
{{--<script>

    $(".input-select-click").hover(function (event){
        $(".input-select").addClass("opened");
    })
</script>--}}
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $("#clearSelectAll").change( function (){
        $("input:checkbox").prop("checked", $(this).prop("checked"))
    })
    $(".inputCheckBox").change(function () {
        if($(this).prop("checked")==false){
            $("#clearSelectAll").prop("checked", false)
        }
        if($(".inputCheckBox:checked").length == $(".inputCheckBox").length){
            $("#clearSelectAll").prop("checked", true)
        }
    })

</script>
<script>
    const choices = new Choices('[data-trigger]',
        {
            searchEnabled: false,
            itemSelectText: '',
        });

</script>
<script>
    $(document).ready(()=>{
        $(".thumbnail").css("height",$(".thumbnail").width()*1)
    })
    $(window).resize(()=>{
        $(".thumbnail").css("height",$(".thumbnail").width()*1)
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
