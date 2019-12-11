<style>
    .card {
        color: red;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 500px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .title {
        color: red;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover,
    a:hover {
        opacity: 0.7;
    }

    img {
        width: 70%;
        height: 100% !important;
    }

    .mainHeader {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 3.5rem;
        margin: 3px auto;
        color: grey;
        text-shadow: 2px 2px black;
        text-align: center;
    }

    .userDetails {
        font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
        font-size: 2rem;
        margin: 3px auto;
        color: whitesmoke;
        text-shadow: 2px 2px black;
    }
</style>
</head>

<body>

    <h2 class="mainHeader">Your Profile</h2>

    <div class="card">
        <img src="<?= base_url() ?>assets/img_avatar3.png" alt="John">
        <h1 class="userDetails">
            <?php echo $this->session->userdata('userinfo')['userinfo']->name; ?>
        </h1>
        <p class="title userDetails">
            <?php echo $this->session->userdata('userinfo')['userinfo']->member_id; ?>
        </p>
        <p class="userDetails">
            <?php echo $this->session->userdata('userinfo')['userinfo']->email ?>
        </p>
        <!-- <div style="margin: 24px 0 0 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div> -->
        <!-- <p><button>Contact</button></p> -->
    </div>
