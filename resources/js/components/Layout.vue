<template>
  <main class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <div class="container">
                <a href="" class="navbar-brand">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <Link href="/assemblies" class="nav-link">Complexe</Link>
                        </li>
                        <li class="nav-item">
                            <Link href="/buildings" class="nav-link">Cladiri</Link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <article>
        <!-- <div v-if="$page.props.flash.message" class="alert alert-success">
            {{ $page.props.flash.message }}
        </div> -->
        <slot />
    </article>
  </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'
export default {
    components: {
        Link
    }
}
</script>