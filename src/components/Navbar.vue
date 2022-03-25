<template>
  <nav class="navbar">
    <div class="navbar-brand">
      <a href="">
        <img src="@/assets/img/logo.png" alt="aldin-sxr.dev logo" width="50" />
      </a>
      <div class="navbar-item">
        aldin-sxr<span class="has-text-weight-bold has-text-danger">.dev</span>
      </div>

      <a
        role="button"
        class="navbar-burger"
        :class="{ 'is-active': isOpen }"
        aria-label="menu"
        aria-expanded="false"
        data-target="navbarBasicExample"
        @click="toggle"
      >
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div class="navbar-menu" :class="{ 'is-active': isOpen }">
      <div class="navbar-start"></div>
      <div class="navbar-end is-uppercase has-text-weight-bold is-size-7">
        <a href="https://github.com/Aldin-SXR?tab=repositories" target="_blank" class="navbar-item px-3">GitHub Projects</a>
        <a href="https://open.spotify.com/playlist/4Ga39lyM9YpN1TqTEwyHF7?si=ntkkPuj0TOuUu6rcaZw0JA&nd=1" target="_blank" class="navbar-item px-3">Essential City Pop</a>
        <a href="https://twitter.com/PhilosophyCats" target="_blank" class="navbar-item px-3">Philosophy Cats</a>
      </div>
    </div>
  </nav>
</template>

<script>
import { ref } from "vue";

export default {
    name: "Navbar",
    setup() {
        const isOpen = ref(false);

        const toggle = () => {
            isOpen.value = !isOpen.value;
        };

        return {
            isOpen,
            toggle,
        };
  },
};
</script>

<style lang="scss">

@import "@/assets/scss/_links.scss";

$red: #f14668 !important;

.navbar-end {
    .navbar-item {
        transition: ease-in 0.2s;
    }

    .navbar-item:hover, 
    .navbar-item:focus {
        color: $red;
    }

    @media (min-width: 1024px) {
        a {
            @include link-underline($red)
        }
    }
}
</style>