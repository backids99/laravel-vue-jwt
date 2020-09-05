<template>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-6">
        <form autocomplete="off" @submit.prevent="login" method="post">
          <div class="card card-default">
            <div class="card-header text-center">Login</div>
            <div class="card-body">
              <div class="alert alert-danger" v-if="has_error && !success">
                <p>Error, unable to connect with these credentials.</p>
              </div>
              
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" placeholder="******" v-model="password" required>
              </div>              
            </div>
            <div class="card-footer text-right">
              <button type="submit" class="btn btn-primary">Signin</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        email: null,
        password: null,
        success: false,
        has_error: false,
        error: ''
      }
    },
    mounted() {
      //
    },
    methods: {
      login() {
        var app = this

        this.$auth.login({
          data: {
            email: app.email,
            password: app.password
          },
          redirect: '/',
          rememberMe: true,
          fetchUser: true
        })
        .then((res) => {
          app.success = res.data.success
        }, () => {
          app.has_error = true
        })
      }
    }
  }
</script>