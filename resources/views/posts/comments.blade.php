		<div class="comments">

			<ul class="list-group">

				@foreach ($post->comments as $comment)

						<li class="list-group-item">
						
							<strong>
								{{ $comment->user->name }}: &nbsp;
							</strong>

							<strong>
								{{ $comment->created_at->diffForHumans() }}: &nbsp;
							</strong>

							{{ $comment->body }}
							
							@if (auth()->user()->id == $comment->user->id)

								<form method="POST" action="/posts/{{ $post->id }}/comments/{{ $comment->id }}" class="ml-auto">

		        					{{ csrf_field() }}

		   							<button type="submit" class="mb-xs mt-xs mr-xs btn btn-danger">Delete</button>

		   						</form>
								
							@endif

						</li>

				@endforeach

			</ul>

			<hr><div class="card">
				<div class="card-block">
					<form method="POST" action="/posts/{{ $post->id }}/comments/">
					{{ csrf_field() }}
						<div class="form-group">
							<textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Add Comment</button>
						</div>
					</form>

					@include('layout.error')
				</div>
			</div>

		</div>
