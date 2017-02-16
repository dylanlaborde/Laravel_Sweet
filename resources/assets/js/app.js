require('./bootstrap');

axios.get('/api/').then(response=>{
	console.log(response.data);
});

