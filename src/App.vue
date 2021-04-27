<template>

<navbar/>
<hero />
<about />
<timelines />
<socials />

<c-footer />

</template>

<script>
import Navbar from '@/components/Navbar'
import Hero from '@/components/Hero'
import Socials from '@/components/Socials'
import CFooter from '@/components/Footer'
import About from '@/components/About'
import Timelines from '@/components/Timelines'

export default {
	name: "App",
	components: {
		Navbar, Hero, Socials, CFooter, About, Timelines
	},
};
</script>

<style>

</style>
