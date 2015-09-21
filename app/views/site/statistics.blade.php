@extends('layout.master')
@section('tittle')
	Estadisticas
@endsection
@section('content')
	<h2 class="title">Estadisticas</h2>
	<div class="btn-group btn-group-justified" role="group" aria-label="...">
	  <div class="btn-group" role="group">
	    <button type="button" class="btn btn-default btnTeam" name="jalisco" teamId="674">Jalisco</button>
	  </div>
	  <div class="btn-group" role="group">
	    <button type="button" class="btn btn-default btnTeam" name="culiacan" teamId="678">Culiacan</button>
	  </div>
	  <div class="btn-group" role="group">
	    <button type="button" class="btn btn-default btnTeam" name="mexicalli" teamId="673">Mexicalli</button>
	  </div>
	  <div class="btn-group" role="group">
	    <button type="button" class="btn btn-default btnTeam" name="obregon" teamId="680">Obregon</button>
	  </div>
	  <div class="btn-group" role="group">
	    <button type="button" class="btn btn-default btnTeam" name="mochis" teamId="675">Los Mochis</button>
	  </div>
	  <div class="btn-group" role="group">
	    <button type="button" class="btn btn-default btnTeam" name="mazatlan" teamId="679">Mazatlán</button>
	  </div>
	  <div class="btn-group" role="group">
	    <button type="button" class="btn btn-default btnTeam" name="hermosillo" teamId="677">Hermosillo</button>
	  </div>
	  <div class="btn-group" role="group">
	    <button type="button" class="btn btn-default btnTeam" name="navojoa" teamId="676">Navojoa</button>
	  </div>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
		  	<div>
		  		<h2>Standings</h2>
		  		<table class="table">
		  			<thead>
		  				<th></th>
		  				<th>W</th>
		  				<th>L</th>
		  				<th>PCT</th>
		  				<th>GB</th>
		  				<th>Home</th>
		  				<th>Away</th>
		  				<th>Streak</th>
		  				<th>Last10</th>
		  			</thead>
		  			<tbody id="standingsRows">
		  				
		  			</tbody>
		  		</table>
		  		<h2>Líderes de bateo en la liga</h2>
		  		<table class="table">
		  			<thead>
		  				<th>Bateador</th>
		  				<th>CLUB</th>
		  				<th>AVG</th>
		  				<th>G</th>
		  				<th>AB</th>
		  				<th>R</th>
		  				<th>H</th>
		  				<th>HR</th>
		  				<th>RBI</th>
		  			</thead>
		  			<tbody id="batterRows">
		  				
		  			</tbody>
		  		</table>
		  		<h2>Líderes de pitcheo en la liga</h2>
		  		<table class="table">
		  			<thead>
		  				<th>Pitcher</th>
		  				<th>CLUB</th>
		  				<th>W-L</th>
		  				<th>ERA</th>
		  				<th>IP</th>
		  				<th>H</th>
		  				<th>BB</th>
		  				<th>SO</th>
		  			</thead>
		  			<tbody id="pitcherRows">
		  				
		  			</tbody>
		  		</table>
		  		<h2 id="tableTeamBatters">Líderes de bateo <span></span></h2>
		  		<table class="table">
		  			<thead>
		  				<th>Bateador</th>
		  				<th>AVG</th>
		  				<th>G</th>
		  				<th>AB</th>
		  				<th>R</th>
		  				<th>H</th>
		  				<th>HR</th>
		  				<th>RBI</th>
		  			</thead>
		  			<tbody id="teamBatterRows">
		  				
		  			</tbody>
		  		</table>
		  		<h2 id="tableTeamPitchers">Líderes de pitcheo <span></span></h2>
		  		<table class="table">
		  			<thead>
		  				<th>Pitcher</th>
		  				<th>Numero</th>
		  				<th>AVG</th>
		  				<th>OPS</th>
		  				<th>H</th>
		  				<th>BB</th>
		  				<th>SO</th>
		  			</thead>
		  			<tbody id="teamPitcherRows">
		  				
		  			</tbody>
		  		</table>
		  	</div>
		</div>
	</div>
	<script type="text/javascript">
	$(function(){
		$.ajax({
			url:"http://chapi.n15.mx/lmp/standings",
			dataType:"json",
			success:function(res){
				$.each(res, function(idx, res){
			    	var rows = "<tr><td>"+res.name+"</td><td>"+res.wins+"</td><td>"+res.losses+"</td><td>"+res.winning_percentage+"</td><td>"+res.games_back+"</td><td>"+res.home_record+"</td><td>"+res.road_record+"</td><td>"+res.streak+"</td><td>"+res.last10+"</td></tr>";

			    	$('#standingsRows').append(rows);
			   	});
			}
		});

		$.ajax({
			url:"http://chapi.n15.mx/lmp/bateo?year=2014",
			dataType:"json",
			success:function(batter){
				var count = 0;
				$.each(batter, function(idx, batter){
			    	if(count < 10){
			    		var batters = "<tr><td>"+batter.NAME_DISPLAY_FIRST_LAST+"</td><td>"+batter.TEAM_ABBREV+"</td><td>"+batter.AVG+"</td><td>"+batter.G+"</td><td>"+batter.AB+"</td><td>"+batter.R+"</td><td>"+batter.H+"</td><td>"+batter.HR+"</td><td>"+batter.RBI+"</td></tr>";

			    		$('#batterRows').append(batters);
			    	}

			    	count++;
			   	});
			}
		});

		$.ajax({
			url:"http://chapi.n15.mx/lmp/pitcheo?year=2014",
			dataType:"json",
			success:function(pitcher){
				var count = 0;
				$.each(pitcher, function(idx, pitcher){
			    	if(count < 10){
			    		var pitchers = "<tr><td>"+pitcher.NAME_DISPLAY_FIRST_LAST+"</td><td>"+pitcher.TEAM_ABBREV+"</td><td>"+pitcher.W+'-'+pitcher.L+"</td><td>"+pitcher.ERA+"</td><td>"+pitcher.IP+"</td><td>"+pitcher.H+"</td><td>"+pitcher.BB+"</td><td>"+pitcher.SO+"</td></tr>";

			    		$('#pitcherRows').append(pitchers);
			    	}
			    	count++;
			   	});
			}
		});

		$('.btnTeam').on('click', function(){							//Make the request with specific id
			var teamName = $(this).attr('name');
			var teamId = $(this).attr('teamId');

			$('#tableTeamPitchers span').empty();
			$('#tableTeamBatters span').empty();
			$('#teamPitcherRows').empty();
			$('#teamBatterRows').empty();
			$('#tableTeamPitchers span').append(teamName);
			$('#tableTeamBatters span').append(teamName);
			

			$.ajax({
				url:"http://chapi.n15.mx/lmp/bateo_equipo?year=2014&equipo="+teamId,
				dataType:"json",
				success:function(teamBatter){
					var count = 0;
					$.each(teamBatter, function(idx, teamBatter){
				    	if(count < 30){
				    		var batters = "<tr><td>"+teamBatter.NAME_DISPLAY_FIRST_LAST+"</td><td>"+teamBatter.AVG+"</td><td>"+teamBatter.G+"</td><td>"+teamBatter.AB+"</td><td>"+teamBatter.R+"</td><td>"+teamBatter.H+"</td><td>"+teamBatter.HR+"</td><td>"+teamBatter.RBI+"</td></tr>";

				    		$('#teamBatterRows').append(batters);
				    	}

				    	count++;
				   	});
				}
			});

			$.ajax({
				url:"http://chapi.n15.mx/lmp/pitcheo_equipo?year=2014&equipo="+teamId,
				dataType:"json",
				success:function(teamPitcher){
					var count = 0;
					$.each(teamPitcher, function(idx, teamPitcher){
				    	if(count < 30){
				    		var pitchers = "<tr><td>"+teamPitcher.NAME_DISPLAY_FIRST_LAST+"</td><td>"+teamPitcher.JERSEY_NUMBER+"</td><td>"+teamPitcher.AVG+"</td><td>"+teamPitcher.OPS+"</td><td>"+teamPitcher.H+"</td><td>"+teamPitcher.BB+"</td><td>"+teamPitcher.SO+"</td></tr>";

				    		$('#teamPitcherRows').append(pitchers);
				    	}
				    	count++;
				   	});
				}
			});

			

		});
	});
	</script>
@endsection