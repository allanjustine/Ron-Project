<div class="containerr">
    <h1 class="mt-5 text-white text-center">Admin Dashboard</h1>
    <div class="content">
            <div class="row mt-5 text-center">
                <div class="col mb-2">
                    <div class="card shadow">
                        <a href="/myPost" id="dash-link">
                            <div class="card-body rounded">
                                <i class="fa-regular fa-signs-post mt-2 text-white" id="dash-icon"></i>
                            </div>
                        </a>
                        <div class="card-footer">
                            <span class="text-white" id="text">My Posts Total :</span>
                            <span class="text-white" id="text2">{{ $posts }}</span>
                        </div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card shadow">
                        <a href="/recentPost" id="dash-link">
                            <div class="card-body rounded">
                                <i class="fa fa-history text-white mt-2" id="dash-icon"></i>
                            </div>
                        </a>
                        <div class="card-footer">
                            <span class="text-white" id="text">Recent Posts Total :</span>
                            <span class="text-white" id="text2">{{ $allPosts }}</span>
                        </div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card shadow">
                        <a href="/admin/users" id="dash-link">
                            <div class="card-body rounded">
                                <i class="fa fa-users text-white mt-2" id="dash-icon"></i>
                            </div>
                        </a>
                        <div class="card-footer">
                            <span class="text-white" id="text">Total of Users :</span>
                            <span class="text-white" id="text2">{{ $users }}</span>
                        </div>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card shadow">
                        <a href="/logs" id="dash-link">
                            <div class="card-body rounded">
                                <i class="fa fa-chart-simple text-white mt-2" id="dash-icon"></i>
                            </div>
                        </a>
                        <div class="card-footer">
                            <span class="text-white" id="text">Total of Logs :</span>
                            <span class="text-white" id="text2">{{ $allPosts }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>


<style>
    .containerr {
        height: 78vh;
    }
    .card {
        background-color:rgb(109, 199, 240);
        width: 240px;
    }
    .card:hover {
        transform: scale(1.02);
        transition: transform 0.1s ease;
    }
    .card-body {
        height: 110px;
    }
    .card:hover {
        background-color:rgb(29, 123, 166);
    }
    #dash-icon {
        font-size: 60px;
        opacity: 0.5;
    }
    #dash-link {
        text-decoration: none;
    }
    #text {
        font-size: 15px;
    }
    #text2 {
        opacity: 0.8;
        font-style: italic;
    }
</style>
