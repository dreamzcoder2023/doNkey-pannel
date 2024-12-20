@extends('layouts.master')
@section('content')
<style>
    .left {
        background-color: green;
        color: white;
        width: fit-content;

        padding: 5px 20px 5px 20px;
        border-radius: 5px;
        /* margin: auto; */
    }

    .right {
        background-color: blue;
        color: white;
        width: fit-content;

        padding: 5px 20px 5px 20px;
        border-radius: 5px;
        /* margin: auto; */
        justify-content: end;

    }

    .names {
        max-height: 100vh;
        overflow-y: scroll;
    }

    .name {
        min-height: 80vh;
        overflow-y: scroll;
    }

    .name>a:hover {
        -webkit-box-shadow: 9px 10px 20px 0px rgba(189, 185, 189, 0.59);
        -moz-box-shadow: 9px 10px 20px 0px rgba(189, 185, 189, 0.59);
        box-shadow: 9px 10px 20px 0px rgba(189, 185, 189, 0.59);
    }


    .messagerightcontainer {
        /* background-color: black; */
        padding: 5px;
        border-radius: 10px;
        /* -webkit-box-shadow: 4px 9px 23px -1px rgba(184, 175, 184, 1);
                        -moz-box-shadow: 4px 9px 23px -1px rgba(184, 175, 184, 1);
                        box-shadow: 4px 9px 23px -1px rgba(184, 175, 184, 1); */
    }

    .messagerightcontainer .right {
        /* background-color: #6262ff; */
        background-color: #1b68ff;
        color: white;
        overflow-wrap: anywhere;

    }

    .messageleftcontainer {
        /* background-color: black; */
        padding: 5px;
        border-radius: 10px;
        /* -webkit-box-shadow: 4px 9px 23px -1px rgba(184, 175, 184, 1);
                        -moz-box-shadow: 4px 9px 23px -1px rgba(184, 175, 184, 1);
                        box-shadow: 4px 9px 23px -1px rgba(184, 175, 184, 1); */
    }

    .messageleftcontainer .left {
        /* background-color: #41c141; */
        background-color: #17a2b8;
        color: white;
        overflow-wrap: anywhere;
    }

    .menus {
        display: none;
    }

    .closemenus {
        display: none;
    }

    @media only screen and (max-width:520px) {
        .name {

            display: none;
        }

        .menus {
            display: block;
        }

        .col-4 {
            min-width: 100% !important;
        }

        .col-4 .left {
            min-width: auto;
        }

        .col-8 {
            min-width: 100% !important;
        }

        .col-8 .right {
            min-width: auto;
        }
    }
</style>
<div class="container  mesagecontainer">

    <i class="fa fa-solid fa-bars menus"></i>
    <i class="fa fa-solid fa-xmark closemenus"></i>
    <span class="closemenus">X</span>
    <div class="row">



        <div class="col-md-3 name" style="height:70vh;-webkit-box-shadow: 9px 10px 20px 0px rgba(189,185,189,0.59);
-moz-box-shadow: 9px 10px 20px 0px rgba(189,185,189,0.59);
box-shadow: 9px 10px 20px 0px rgba(189,185,189,0.59);">
            <br>
            <form method="GET" class="search-form form-inline" enctype="multipart/form-data" action="{{url('chatsupport')}}">

                <div class="form-group for">
                    <div class="input-group">
                        <input type="text" value="{{ request('search') }}" name="search" class="form-control" style="font-size:12px;" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" style="font-size:9px;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>

                    </div> &nbsp;&nbsp;
                    <a class="btn btn-danger" href=" {{ url('chatsupport') }} " style="font-size:9px;">
                        <i class="fa fa-times"></i>
                    </a>
                    <!-- <input value="{{ request('search') }}" type="search" class="form-control" name="search" autocomplete="off" placeholder="Search..." min="" />

                            <button class="badge badge-primary" type="submit"><i class="fa fa-search "></i></button>
                            <a class="badge badge-danger" href="{{ route('chatwithadmin') }}"><i class="fa fa-times"></i></a> -->
                </div>
            </form>
            @foreach ($subscriber as $sub)
            @if ($sub->subscriberId == session::get('messagesubscriber'))
            @php
            $n = $sub->name . ' ' . '(' . $sub->subscriberId . ')';
            @endphp
            @endif

            <a class="btn   w-100 mt-2" href="{{ url('chat/' . $sub->subscriberId) }}">{{ $sub->name . ' - ' . $sub->subscriberId }}<span class="dot{{ $sub->subscriberId }}" hidden><span style="font-size:20px;padding-left: 20px;">&#x2022<span></span></a>
            @endforeach
        </div>
        <div class="col-md-8">
            <div class="container " style="-webkit-box-shadow: 9px 10px 20px 0px rgba(189,185,189,0.59);
-moz-box-shadow: 9px 10px 20px 0px rgba(189,185,189,0.59);
box-shadow: 9px 10px 20px 0px rgba(189,185,189,0.59);border-radius:20px;padding:20px;">
                <span class="h3">
                   {{ $n ?? "Searching..." }}

                </span>

                <div class="container p-4 names" style="height:70vh;border-top:.5px solid #cdbdbd" id="messagesection">
                </div>

                <div class="input-group mb-2">

                    <textarea class="form-control" id="message" placeholder="Message"></textarea>
                    <div class="input-group-prepend">
                        <button type="submit" value="Submit" id="messageid" class="btn btn-primary" style="border-radius:10px">
                            <i class="fa fa-solid fa-paper-plane"></i>
                        </button>
                        <!-- <button type="button" value="END" id="messageendid" class="btn btn-danger" style="border-radius:10px">

                                            <i class="fa fa-solid fa-times" style="font-size:20px"></i>
                                        </button> -->
                        <!-- <input type="submit" value="Submit" id="messageid" class="btn btn-primary" style="border-radius:10px"> -->

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<script type="module">
    // Import the functions you need from the SDKs you need
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-app.js";
    import {
        getAnalytics
    } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-analytics.js";

    import {
        getDatabase,
        set,
        ref,
        push,
        child,
        onValue,
        onChildAdded
    } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-database.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyCjF2n53vtKKaWyPLJURHCr8hPVjqzGKg8",
        authDomain: "donkey-18b12.firebaseapp.com",
        projectId: "donkey-18b12",
        storageBucket: "donkey-18b12.appspot.com",
        messagingSenderId: "1025418662407",
        appId: "1:1025418662407:web:947f0f8e534af293b8d0a2",
        measurementId: "G-MXHJ3J1FHF"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
    var countdata = parseInt("0");
    const database = getDatabase(app);
    var name = "admin->{{ session::get('messagesubscriber') }}";
    var adminid = "{{ session::get('messagesadminid') }}";
    var name1 = "{{ session::get('messagesubscriber') }}->admin";
    messageid.addEventListener('click', (e) => {
        if (document.getElementById('message').value != "") {
            var message = document.getElementById('message').value;


            const id = push(child(ref(database), 'messages')).key;
            set(ref(database, "messageswithadmin/" + id), {
                name: name,
                adid: adminid,
                message: message
            });
            document.getElementById('message').value = "";
            // document.getElementById('titleofmessage').value = "";
        }
    });
    const newmsg = ref(database, 'messageswithadmin/');
    onChildAdded(newmsg, (data) => {

        if (data.val().name == name1) {
            // console.log(data.val().message)
            $('#messagesection').append(
                "<div class='row mt-1 '><div class='col-4 messageleftcontainer'><div class='left pull-left'>" +
                data.val().message + "</div></div><div class='col-8'></div></div>")
            countdata = countdata + 1;



        }
        if (data.val().name == name) {
            $('#messagesection').append(
                "<div class='row mt-1 '><div class='col-8'></div><div class=' col-4 messagerightcontainer'><div class=' pull-right'>" +
                data.val().adid + "</div></div></div>")
            $('#messagesection').append(
                "<div class='row mt-1 '><div class='col-8'></div><div class=' col-4 messagerightcontainer'><div class='right pull-right'>" +
                data.val().message + "</div></div></div>")
            countdata = countdata + 1;



        }
        $('#messagesection').animate({
            scrollTop: $('#messagesection').prop("scrollHeight")
        }, 500);
        localStorage.setItem("countmessagesubadmin{{ session::get('messagesubscriber') }}", countdata);
    });

    $('.menus').on('click', function() {
        $('.menus').css('display', "none");
        $('.name').css('display', "block");
        $('.closemenus').css('display', "block");
    });

    $('.closemenus').on('click', function() {
        $('.closemenus').css('display', "none");
        $('.name').css('display', "none");
        $('.menus').css('display', "block");
    })
</script>
@endsection
