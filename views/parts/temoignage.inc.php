
    <section class="temoignages" v-if="selectedTemoignage">

        <article>
            <div class="rating">
                <p>
                    <span v-for="index in Math.floor(selectedTemoignage.rating)" class="material-symbols-outlined star-rating">
                        star_rate
                    </span>

                    <span v-if="!selectedHalf(selectedTemoignage.rating)" class="material-symbols-outlined star-rating">
                        star_rate_half
                    </span>
                </p>

                <p class="temoignage">
                    {{ selectedTemoignage.note_media}}
                </p>
            </div>

            <div class="intro">

                <h3>témoignage</h3>

                <p class="commentaire">
                    {{selectedTemoignage.commentaire}}
                </p>
            </div>

            <div class="conteneur-suggestions">

                <div class="suggestion">

                    <div class="plat">
                        <p>{{selectedTemoignage.plat}}</p>
                    </div>

                    <a href="menu_nourriture">
                        <span class="material-symbols-outlined">
                            arrow_right_alt
                        </span>
                    </a>
                </div>

                <div class="breuvage">

                    <p class="suggestion">
                        {{selectedTemoignage.suggestion}}
                        <a href="menu_drinks">
                            <span class="material-symbols-outlined">
                                arrow_right_alt
                            </span>
                        </a>
                    </p>

                </div>
            </div>

        </article>

        <div class="conteneur-images">

            <div class="temoignage-image">
                <img :src="'public/img/' + selectedTemoignage.image" alt="image">
            </div>

            <div class="star">
                <img :src="'public/img/' + selectedTemoignage.imageRating" alt="image rating" class="rating">
            </div>
        </div>
    </section>

