<template>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">
                            {{ movies[0].title }}
                        </h1>
                        <p class="lead fw-normal text-white-50 mb-4">
                            {{ movies[0].storyline }}
                        </p>
                        <div
                            class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start"
                        >
                            <a
                                class="btn btn-primary btn-lg px-4 me-sm-3"
                                href="#features"
                                >Preview</a
                            >
                            <a
                                class="btn btn-outline-light btn-lg px-4"
                                href="#!"
                                >Watch</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <img
                        class="img-fluid rounded-3 my-5"
                        :src="movies[0].posterurl"
                        alt="..."
                    />
                </div>
            </div>
        </div>
    </header>
</template>

<style scoped></style>
<script>
export default {
    name: "Mainmovies",
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
                    console.log(movies);
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    }
};
</script>
