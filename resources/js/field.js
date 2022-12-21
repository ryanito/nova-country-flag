import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-country-flag', IndexField)
  app.component('detail-country-flag', DetailField)
  app.component('form-country-flag', FormField)
})
