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
        <div class="col-md-12">
          <div class="card">
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Position</th>
                    <th scope="col">Club</th>
                    <th scope="col">Played</th>
                    <th scope="col">Won</th>
                    <th scope="col">Drawn</th>
                    <th scope="col">Lost</th>
                    <th scope="col">GF</th>
                    <th scope="col">GA</th>
                    <th scope="col">GD</th>
                    <th scope="col">Points</th>
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
        users: []
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
axios.get('https://jsonplaceholder.typicode.com/users')
        .then(function (response) {
           console.log(response)

        })
        .catch(function (error) {
            console.log(error);
        })
},
}
</script>
