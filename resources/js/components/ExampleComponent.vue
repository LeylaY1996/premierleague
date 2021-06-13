<template>
  <div class="container">
    <div class="justify-content-center mt-5">
      <div class="row">
        <div class="col-md-4 mb-5">
          <select class="form-select" aria-label="Default select example">
            <option selected>Filter By MatchWeek</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Teams</th>
                    <th scope="col">PTS</th>
                    <th scope="col">P</th>
                    <th scope="col">W</th>
                    <th scope="col">D</th>
                    <th scope="col">L</th>
                    <th scope="col">GD</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-4 pb-5">
          <p>Match Results</p>
          <p>4. Week Match Results</p>
          <div class="row">
            <div class="col-md-4">Liverpool</div>
            <div class="col-md-4">2-2</div>
            <div class="col-md-4">Chelsea</div>

          </div>
           <div class="row">
            <div class="col-md-4">Liverpool</div>
            <div class="col-md-4">2-2</div>
            <div class="col-md-4">Chelsea</div>

          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
components: {
},
data() {
	return {
		members: [],
		numberOfMembers:0,
        matches: []
	};
},
methods: {
/* getMembers(){
    apiService.getMembers().then((data) => {
        this.members = data.data;
        this.numberOfMembers= data.count;
    });
}, */
},
mounted() {
/* this.getMembers(); */
axios.get('/api/stats')
        .then(function (response) {
          console.log(response.data)
          console.log(response.data.sort());
          
         /*  response.data.forEach(element => {
            console.log(element.pts)
            
          }); */
        })
        .catch(function (error) {
            console.log(error);
        })
},
}
</script>
