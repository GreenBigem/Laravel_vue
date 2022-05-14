<template>
    <div>      

        <CreateComponent></CreateComponent>
        <SinglePostComponent></SinglePostComponent>

        <!-- <div>Name: {{ $data.name }}</div>
        <div>Job: {{ vasyaJob }}</div>
        <button @click="sayHello">Hello</button>
        <button @click="sayHi">Hi</button>
        <div> {{ persons }} </div>
        <div v-for="person in persons">
            <div>{{ person.name }}</div>
            <div>{{ person.age }}</div>
            <div>{{ person.job }}</div>
        </div> -->
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Job</th>
    </tr>
  </thead>
  <!-- <tbody>
    <tr v-for="person in persons">
      <th scope="row">{{ person.id }}</th>
      <td>{{ person.name }}</td>
      <td>{{ person.age }}</td>
      <td>{{ person.job }}</td>
    </tr>
  </tbody> -->
</table>
    </div>
</template>

<script>
import axios, { Axios } from "axios"
import SinglePostComponent from "./SinglePostComponent"
import CreateComponent from "./CreateComponent"

    export default {
        name: "PostComponent",

        data() {
            return {
            // name: 'Vasya',
            // age: 21,
            // persons: [
            //     {
            //         id: 1,
            //         name: 'Kolya',
            //         age: 18,
            //         job: 'coach',
            //     },
            //                     {
            //         id: 2,
            //         name: 'Elena',
            //         age: 17,
            //         job: 'rest',
            //     },
            //                     {
            //         id: 3,
            //         name: 'Petr',
            //         age: 34,
            //         job: 'seller',
            //     },
            //                                     {
            //         id: 4,
            //         name: 'Ksusha',
            //         age: 99,
            //         job: 'lawyer',
            //     },
            //                                     {
            //         id: 5,
            //         name: 'Nicolas',
            //         age: 125,
            //         job: 'builder',
            //     },
            // ]

            persons: null

            }
        },

        mounted() {
            // this.getPersons()
            // this.getPosts()
        },

        methods: {

            // getPersons() {
            //     axios
            //     .get('/persons')
            //     .then( res => this.persons = res.data)
            //     .catch( error => {

            //     })
            //     .finally( {
                    
            //     })
            // }

            // getPosts() {
            //     axios.get('/posts')
            //     .then(function(data) {
            //         console.log(data);
            //     })
            // }

            // sayHello(){
            //     console.log('Hello')
            // },
            // sayHi(){
            //     console.log('Hi')
            // }
        },

        computed: {
            // vasyaJob() {
            //     return this.name + ' работает в булочной'
            // },
            
            // personsAgeMoreTwenty() {
            //     return this.persons.filter(function(person) {
            //         return person.age > 20
            //     })
            // },
        },

        components: {
            SinglePostComponent,
            CreateComponent
        }
        }
</script>
