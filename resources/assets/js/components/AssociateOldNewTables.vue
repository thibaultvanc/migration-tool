<template>
  <div class="">

          <pre>
            {{form_from_old}}
          </pre>


    <div class="columns has-text-centered">
      <div class="column is-5">
        <i class="material-icons" style="font-size:2em">view_day</i><br>
        {{ project.old_database.name }}
        <hr>
          <!-- <pre v-for="data in form_from_old">
            {{data}}-
        </pre> -->


        <hr>
        <div v-for="table in project.old_database.tables" class="has-text-left">
          {{table.id}} - {{table.name}}
          <select @change="connect('from_old',table.id)" v-model="old[table.id]">
            <option v-for="relatedTable in project.new_database.tables" :value="relatedTable.id">
              {{relatedTable.id}} - {{relatedTable.name}}
            </option>
          </select>
        </div>

      </div>
      <div class="column is-2">
        <i class="material-icons" style="font-size:2em">navigate_next</i><br>
      </div>
      <div class="column is-5">
        <i class="material-icons" style="font-size:2em">view_day</i><br>
        {{ project.new_database.name }}
        <hr>

        <div v-for="data in form_from_new">
          {{data}}-
        </div>

        <hr>
        <div v-for="table in project.new_database.tables" class="has-text-left">
          {{table.id}} - {{table.name}}
          <select @change="connect('from_new',table.id)" v-model="form_from_new[table.id]"><!--v-model="form[from_new].table.id"-->
            <option v-for="relatedTable in project.old_database.tables" :value="relatedTable.id">
              {{relatedTable.id}} - {{relatedTable.name}}
            </option>
          </select>
        </div>
      </div>
    </div>



-------------

    <pre>
      {{project}}
    </pre>


  </div>
</template>

<script>
    export default {
        props : {
          project : {
            required : true,
            type : Object,
          }
        },
        methods : {
            connect(type,table_id) {
              console.log('Connect')
              console.log('type',type);
              console.log('table_id',table_id);

              console.log('this.old[table_id]', this.old[table_id]);

              let related = this.old[table_id]


              if (type == 'from_old') {
                console.log('form_from_old[table_id]',this.form_from_old[table_id]);

                let details = 'OLD table : ' + table_id + ' , is linked to table :' +  related
                this.form_from_old.push({table_id, related, type, details})
                this.$http.post('/project/'+this.project.id+'/related_table',this.form_from_old).then(response=>{
                  console.log(response);
                })

              }

              else if (type == 'from_new') {
                  this.form_from_old.push({table_id, related, type, details})
                console.log('form_from_new[table_id]',this.form_from_new[table_id]);

                this.$http.post('/project/'+this.project.id+'/related_table',this.form_from_new).then(response=>{
                  console.log(response);
                })

              }



            }
        },
        mounted() {
            console.log('Component ready.')
            // this.form_from_old=this.project.old_database.tables
        },
        watch : {
          'form' : function(old, val){
            console.log('old',old);
            console.log('val',val);
          }
        },
        data () {
          return {
            form_from_old:[],
            old:{},
            form_from_new:[],
          }
        }
    }
</script>
