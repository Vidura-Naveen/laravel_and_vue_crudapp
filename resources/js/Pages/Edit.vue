<template>
    <form @submit.prevent="form.put(`/blog/update/${post.id}`)">
        <div>
            <label for="">Title</label>
            <input type="text" v-model="form.title">
        </div>


        <div>
            <label for="">Author</label>
            <input type="text" v-model="form.author">
        </div>


        <div>
            <label for="">Content</label>
            <textarea name="" id="" cols="100" rows="5" v-model="form.content"></textarea>
        </div>

        <!-- submit -->
        <button type="submit" :disabled="form.processing">Edit</button>
      </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import { defineProps } from 'vue';

let props = defineProps({
    blogs: Object
})

const form = useForm({
  title: props.blogs.title,
  author: props.blogs.author,
  content: props.blogs.content,
});
</script>
