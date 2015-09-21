@extends('layout.master')
@section('title')
	Servicios Web
@endsection
@section('content')
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
	  		<h2>Líderes de bateo</h2>
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
	  		<h2>Líderes de bateo por equipo: Charros</h2>
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
	  		<h2>Líderes de pitcheo</h2>
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
	  		<h2>Líderes de pitcheo por equipo: Charros</h2>
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
	  		<h2>Miniscore del 24-Oct-2014</h2>
	  		<div id="miniscoreRows">
	  			
	  		</div>
	  		<h2>Boxscore MXC@JAL</h2>
	  		<div id="boxscoreRows">
	  			
	  		</div>
	  		<h2>Play by play MXC@JAL</h2>
	  		<div id="">
	  			<div>
	  				<ul id="pbpRows">

	  				</ul>
	  			</div>
	  		</div>
	  		<input type="button" value="Refresh" id="btnRefresh">
	  	</div>
	</div>
	<script type="text/javascript">
	$(function(){
		$('#btnRefresh').on('click', function(){
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
				url:"http://chapi.n15.mx/lmp/bateo_equipo?year=2014&equipo=673",
				dataType:"json",
				success:function(teamBatter){
					var count = 0;
					$.each(teamBatter, function(idx, teamBatter){
				    	if(count < 20){
				    		var batters = "<tr><td>"+teamBatter.NAME_DISPLAY_FIRST_LAST+"</td><td>"+teamBatter.AVG+"</td><td>"+teamBatter.G+"</td><td>"+teamBatter.AB+"</td><td>"+teamBatter.R+"</td><td>"+teamBatter.H+"</td><td>"+teamBatter.HR+"</td><td>"+teamBatter.RBI+"</td></tr>";

				    		$('#teamBatterRows').append(batters);
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

			$.ajax({
				url:"http://chapi.n15.mx/lmp/pitcheo_equipo?year=2014&equipo=674",
				dataType:"json",
				success:function(teamPitcher){
					var count = 0;
					$.each(teamPitcher, function(idx, teamPitcher){
				    	if(count < 20){
				    		var pitchers = "<tr><td>"+teamPitcher.NAME_DISPLAY_FIRST_LAST+"</td><td>"+teamPitcher.JERSEY_NUMBER+"</td><td>"+teamPitcher.AVG+"</td><td>"+teamPitcher.OPS+"</td><td>"+teamPitcher.H+"</td><td>"+teamPitcher.BB+"</td><td>"+teamPitcher.SO+"</td></tr>";

				    		$('#teamPitcherRows').append(pitchers);
				    	}
				    	count++;
				   	});
				}
			});

			$.ajax({
				url:"http://chapi.n15.mx/lmp/miniscore?fecha=2014-10-24",
				dataType:"json",
				success:function(score){
					$.each(score, function(idx, score){
				    	var score = "<table class='table'><thead><th>Hora: "+score.home_time+"</th><th>C</th><th>H</th><th>E</th></thead><tbody><tr><td>"+score.away_name_abbrev+"</td><td>"+score.away_team_runs+"</td><td>"+score.away_team_hits+"</td><td>"+score.away_team_errors+"</td></tr><tr><td>"+score.home_name_abbrev+"</td><td>"+score.home_team_runs+"</td><td>"+score.home_team_hits+"</td><td>"+score.home_team_errors+"</td></tr></tbody></table>";

				    	$('#miniscoreRows').append(score);
				   	});
				}
			});

			$.ajax({
				url:"http://chapi.n15.mx/lmp/boxscore?fecha=2014-10-24&juego=2014_10_24_mxcwin_jalwin_1&data=linescore",
				dataType:"json",
				success:function(boxscore){
					$.each(boxscore, function(idx, boxscore){
				    	var boxscore = "<table class='table'><thead><th>Entrada "+boxscore.inning+"</th><th></th></thead><tbody><tr><td>Local</td><td>"+boxscore.home+"</td></tr><tr><td>Visitante: </td><td>"+boxscore.away+"</td></tr></tbody></table>";

				    	$('#boxscoreRows').append(boxscore);
				   	});
				}
			});

			$.ajax({
				url:"http://chapi.n15.mx/lmp/game?fecha=2014-10-24&juego=2014_10_24_mxcwin_jalwin_1",
				dataType:"json",
				success:function(pbp){
					$.each(pbp.play_by_play, function(idx, play){
				    	var playbyplay = "<li>Entrada "+play.inning+" - "+play.pbp[0].description+"</li><li>"+play.pbp[0].b+", "+play.pbp[0].s+" "+play.pbp[0].o+"</li>";

				    	$('#pbpRows').append(playbyplay);
				   	});
				}
			});

		});
	});
	</script>
@endsection