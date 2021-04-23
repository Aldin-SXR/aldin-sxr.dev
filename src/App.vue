<template>

<navbar/>
<hero />
<about />
<socials />

<c-footer />

</template>

<script>
import Navbar from '@/components/Navbar'
import Hero from '@/components/Hero'
import Socials from '@/components/Socials'
import CFooter from '@/components/Footer'
import About from '@/components/About'

export default {
	name: "App",
	components: {
		Navbar, Hero, Socials, CFooter, About
	},
};
</script>

<style>

</style>
