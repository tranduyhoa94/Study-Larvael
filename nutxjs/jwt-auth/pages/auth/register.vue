<template>
  <div class="container">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <p class="mb-0">Register</p>
        </div>
        <div class="card-body">
          <form @submit.prevent="register">
            <div class="form-group">
              <label>Name</label>
              <input
                v-model="form.name"
                type="text"
                class="form-control"
                placeholder="Name"
              />
            </div>
            <div class="form-group">
              <label>Email</label>
              <input
                v-model="form.email"
                type="email"
                class="form-control"
                placeholder="Email"
              />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input
                v-model="form.password"
                type="password"
                class="form-control"
                placeholder="Password"
              />
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: '',
        email: '',
        password: ''
      }
    }
  },
  methods: {
    async register() {
      await this.$axios.post('/auth/register', this.form, {
        headers: {
          Accept: 'application/json',
          'Content-Type': 'application/json'
        }
      })
      this.$auth.login({ data: this.form })
      this.$router.push({ name: 'home' })
    }
  }
}
</script>
