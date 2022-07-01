<template>
 <div class="page">
  <div class="p-5 bg-dark text-light">
   <div class="container d-flex">
    <img
     src="https://media-assets.wired.it/photos/615da806abe69756b88436bd/master/pass/Deadpool.jpg"
     alt=""
    />
    <div class="ms-3">
     <h1 class="display-3">Contact Me</h1>
     <p class="lead">Jumbo helper text</p>
    </div>
   </div>
  </div>


  <div class="container">
   <div class="content py-4">


    <vue-form method="post" action="/contact-form">
     <div class="mb-3 d-flex flex-column">
      <label for="" class="form-label">Full Name</label>
      <input
       type="text"
       name="full_name"
       id="full_name"
       class="Your Name"
       placeholder=""
       aria-describedby="FullNameHelper"
      />
      <small id="FullNameHelper" class="text-muted">type your name</small>
     </div>
     <div class="mb-3 d-flex flex-column">
      <label for="" class="form-label">Email</label>
      <input
       type="text"
       name="email"
       id="email"
       class="Your email"
       placeholder=""
       aria-describedby="EmailHelper"
      />
      <small id="EmailHelper" class="text-muted">type your email</small>
     </div>
     <div class="mb-3 d-flex flex-column">
      <label for="" class="form-label">Subject</label>
      <input
       type="text"
       name="subject"
       id="subject"
       class="Your jubject"
       placeholder=""
       aria-describedby="SubjectHelper"
      />
      <small id="SubjectHelper" class="text-muted">type subject</small>
     </div>
     <div class="mb-3 d-flex flex-column">
      <label for="text" class="form-label">Message</label>
      <textarea class="form-control" name="text" id="text" rows="3"></textarea>
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </vue-form>
   </div>
  </div>
 </div>
</template>



<script>
import VueForm from '../components/VueForm.vue'
export default {
 neme: "Contacts",
 components: {
    VueForm
 }
};
</script>


<style lang="scss" scoped>
img {
 width: 200px;
 border-radius: 50%;
}
</style>
