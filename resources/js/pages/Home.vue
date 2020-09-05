<template>
	<div class="container">
		<div class="card card-default">
			<div class="card-body p-0">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th colspan="2">Data of User</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Email</td>
								<td>{{ user.email }}</td>
							</tr>
							<tr>
								<td>Username</td>
								<td>{{ user.username }}</td>
							</tr>
							<tr>
								<td>Full Name</td>
								<td>{{ user.full_name }}</td>
							</tr>
							<tr>
								<td>Date of Birth</td>
								<td>{{ user.date_of_birth }}</td>
							</tr>
							<tr>
								<td>Created At</td>
								<td>{{ user.created_at }}</td>
							</tr>
							<tr>
								<td>Updated At</td>
								<td>{{ user.updated_at }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	data() {
		return {
			user: {
				email: 'Loading...',
				username: 'Loading...',
				full_name: 'Loading...',
				date_of_birth: 'Loading...',
				created_at: 'Loading...',
				updated_at: 'Loading...'
			}
		}
	},
	mounted() {
		axios.get('').then(
			response => (this.user = response.data.data)
		);
	}
}
</script>