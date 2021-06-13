<template>
  <div class="premier-league container mb-sm-5">
    <div class="justify-content-center">
      <div class="row">
        <div class="col-sm-12 col-md-12 mt-3 text-center">
          <img src="/img/plogo2.png" alt="" />
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 mb-5 text-center">
          <select
            class="form-select"
            @change="onChange($event)"
            aria-label="filter-week"
          >
            <option value="1">One Week</option>
            <option value="2">Two Week</option>
            <option value="3">Three Week</option>
            <option value="4">Four Week</option>
            <option value="5">Five Week</option>
            <option value="6" selected>Six Week</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-8">
          <div class="card">
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Teams</th>
                    <th scope="col">PTS</th>
                    <th scope="col">Played</th>
                    <th scope="col">W</th>
                    <th scope="col">D</th>
                    <th scope="col">L</th>
                    <th scope="col">GD</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="match in matches" :key="match.id">
                    <td>{{ match.id }}</td>
                    <td>
                      <img :src="match.logo" alt="" />
                      {{ match.team }}
                    </td>
                    <td>{{ match.pts }}</td>
                    <td>{{ match.played }}</td>
                    <td>{{ match.win }}</td>
                    <td>{{ match.draw }}</td>
                    <td>{{ match.loss }}</td>
                    <td>{{ match.gd }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 mt-sm-5">
          <div class="card">
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Match Results</th>
                    <input v-model="week" type="hidden" placeholder="edit me" />
                    <th>{{ week }}. Week Match Results</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="weekResult in weekResults" :key="weekResult.id">
                    <td>Sonuç</td>
                    <td>
                      <img
                        :src="weekResult.home_team.logo"
                         alt=""
                      />
                      {{weekResult.home_team.name}} {{weekResult.home_goal}}-{{weekResult.away_goal}} {{weekResult.away_team.name}}
                      <img
                         :src="weekResult.away_team.logo"
                        alt=""
                      />
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center mb-3">
          <h3>Other Week Results</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-4 mb-sm-5"  v-for="weekResult in weekOtherResults" :key="weekResult.id">
          <div class="card">
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Match Results</th>
                    <th>{{ weekResult.match_week_id }}. Week Match Results</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Sonuç</td>
                    <td>
                      <img
                        :src="weekResult.home_team.logo"
                         alt=""
                      />
                      {{weekResult.home_team.name}} {{weekResult.home_goal}}-{{weekResult.away_goal}} {{weekResult.away_team.name}}
                      <img
                         :src="weekResult.away_team.logo"
                        alt=""
                      />
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name:'ExampleComponent',
  data() {
    return {
      matches: [],
      week: 6,
      weekResults: null,
      weekOtherResults: null,
    };
  },
  mounted() {
    console.log(this.getMatches());
    console.log(this.matches);
    console.log(this.otherResult);

  },
  methods: {
    getMatches() {
      axios
        .get("/api/stats/filter/6")
        .then((response) => {
          this.matches = response.data.standings.sort((teamA, teamB) => {
            let match = teamB.pts - teamB.pts;
            if(match !== 0){
              return match;
            }
            return teamB.gd - teamB.gd;
          })
            let result = []
          let otherResult = []
          this.week = 6;
          // console.log(response.data.matches
          response.data.matches.forEach(function (item) {
            if (item.match_week_id == 6) {
               result.push(item);
              console.log("item");
              
            }
              if(6 > item.match_week_id) {
                otherResult.push(item)
                console.log(otherResult,"otherREsult")
              }
          });
          this.weekResults = result
          this.weekOtherResults = otherResult
         });
    },
    onChange(event) {

      console.log("weekresult",typeof this.weekResult);
      console.log(event.target.value);
      axios
        .get("/api/stats/filter/" + event.target.value)
        .then((response) => {
          console.log("Burada",response.data)
          this.matches = response.data.standings.sort((teamA, teamB) => {
            let match = teamB.pts - teamB.pts;
            if(match !== 0){
              return match;
            }
            return teamB.gd - teamB.gd;
          })
          let result = []
          let otherResult = []
          this.week = event.target.value;
          // console.log(response.data.matches
          response.data.matches.forEach(function (item) {
            if (item.match_week_id == event.target.value) {
               result.push(item);
              console.log("item");
              
            }
              if(event.target.value > item.match_week_id) {
                otherResult.push(item)
                console.log(otherResult,"otherREsult")
              }
          });
          this.weekResults = result
          this.weekOtherResults = otherResult

          console.log(this.weekResults)
        })
        .catch((error) => {
          this.errorMessage = error.message;
          console.error("There was an error!", error);
        });
    },
  },
};
</script>
