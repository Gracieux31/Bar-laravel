<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Navigateur</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crete+Round">
        <link rel="stylesheet" href="../css/app.css">
    </head>

    <body>
        <div class="container">
	        <div class="ligne">
		        <div class="col-md-12">

			        @if (session('status'))
			        <h6 class="alert alert-success">{{ session('status') }}</h6>
			        @endif

			        <div class="card">
				        <div class="card-header">
					        <h4> Ajouter des cocktails
					            <a href="{{ url('cocktails') }}" class="btn btn-primary float-end">retour</a>
					        </h4>
				        </div>
				        <div class="card-body">

					        <form action="{{ url('add-fruit') }}" method="POST" enctype="multipart/form-data">
						        @csrf

						        <div class="form-groupe mb-3">
							        <label for="">Cocktail Name</label>
							        <input type="text" name="name" class="form-control">
						        </div>
						        <div class="form-groupe mb-3">
							        <button type="submit" class="btn btn-primary">Save Cocktails</button>
						        </div>

					        </form>
				        </div>
			        </div>
		        </div>
	        </div>
        </div>
    </body>
</html>