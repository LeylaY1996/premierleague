<template>
  <div class="premier-league  container   mb-sm-5 mt-5">
    <div class="justify-content-center">
      <div class="row">
        <div class="col-sm-12 col-md-12 mt-3 text-center">
          <img src="/img/plogo2.png" alt="" />
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 mb-5 text-center">
          <select class="form-select" aria-label="filter-week">
            <option selected>All Matchweeks</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
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
                    <th scope="col">Week</th>
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
                    <td>{{ match.week }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4  mt-sm-5">
          <div class="card">
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Match Results</th>
                    <th>4. Week Match Results</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Sonuç</td>
                    <td>Liverpool 2-2 Chelsea</td>
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
           <div class="col-sm-12 col-md-4  mb-sm-5">
          <div class="card">
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Match Results</th>
                    <th>4. Week Match Results</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Sonuç</td>
                    <td>Liverpool 2-2 Chelsea</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
         <div class="col-sm-12 col-md-4  mb-sm-5">
          <div class="card">
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Match Results</th>
                    <th>4. Week Match Results</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Sonuç</td>
                    <td>Liverpool 2-2 Chelsea</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
         <div class="col-sm-12 col-md-4">
          <div class="card">
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Match Results</th>
                    <th>4. Week Match Results</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Sonuç</td>
                    <td>Liverpool 2-2 Chelsea</td>
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
  data() {
    return {
      matches: [],
    };
  },
  mounted() {
    console.log(this.getMatches());
    console.log(this.matches);
  },
  methods: {
    getMatches() {
      axios
        .get("/api/stats")
        .then((response) => (this.matches = response.data));
    },
  },
};
</script>
