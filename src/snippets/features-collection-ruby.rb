# Ruby
include Vero::DSL

vero.users.track!({
  id: '123',
  email: 'damienb@getvero.com',
  data: {
    first_name: 'Damien',
    last_name: 'Brzoska',
    subscription: 'medium'
  }
})