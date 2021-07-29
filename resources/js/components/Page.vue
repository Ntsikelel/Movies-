<template>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <div
                        class="col-lg-6"
                        v-for="(movie, id) in movies"
                        :key="id"
                    >
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"
                                ><img
                                    class="card-img-top"
                                    :src="movie.posterurl"
                                    alt="..."
                            /></a>
                            <div class="card-body">
                                <div class="small text-muted">
                                    {{ movie.year }}
                                </div>
                                <h2 class="card-title h4">{{ movie.title }}</h2>
                                <p class="card-text">
                                    {{ movie.storyline }}
                                </p>
                                <a class="btn btn-primary" href="#!"
                                    >Read more →</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled">
                                <a
                                    class="page-link"
                                    href="#"
                                    tabindex="-1"
                                    aria-disabled="true"
                                    >Newer</a
                                >
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#!">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">3</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#!">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">15</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">Older</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Search movie..."
                                    aria-label="Search movie..."
                                    aria-describedby="button-search"
                                />
                                <button
                                    class="btn btn-primary"
                                    id="button-search"
                                    type="button"
                                >
                                    Go
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Movie Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Comedy</a></li>
                                        <li><a href="#!">Horror</a></li>
                                        <li><a href="#!">Cartoons</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Drama</a></li>
                                        <li><a href="#!">Action</a></li>
                                        <li><a href="#!">Anime</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "page",
    data: () => {
        return {
            movies: [],
            loading: true
        };
    },
    mounted() {
        this.loadMovies();
    },
    methods: {
        loadMovies: function() {
            axios
                .get("/api/movies")
                .then(response => {
                    this.movies = response.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    }
};
</script>
