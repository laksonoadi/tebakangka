<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TEBAK ANGKA</title>
<style type="text/css">
	.hidden {
		display: none;
	}
	table, td, th {
	  border: 1px solid black;
	  font-size: 32px;
	  text-align: center;
	}

	table {
	  border-collapse: collapse;
	  width: 400px;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>

<section>
	
	<div id="satu" class="hidden">
		<table border="1">
			<tr>
				<td>1</td>				
				<td>3</td>				
				<td>5</td>				
				<td>7</td>				
				<td>9</td>				
			</tr>
			<tr>
				<td>11</td>				
				<td>13</td>			
				<td>15</td>				
				<td>17</td>				
				<td>19</td>							
			</tr>
			<tr>
				<td>21</td>				
				<td>23</td>				
				<td>25</td>				
				<td>27</td>				
				<td>29</td>							
			</tr>
			<tr>
				<td>31</td>				
				<td>33</td>				
				<td>35</td>				
				<td>37</td>				
				<td>39</td>							
			</tr>
			<tr>
				<td>41</td>				
				<td>43</td>				
				<td>45</td>				
				<td>47</td>
				<td>49</td>				
			</tr>
		</table>
		
	</div>
	<div id="dua" class="hidden">
		<table border="1">
			<tr>
				<td>2</td>
				<td>3</td>
				<td>6</td>
				<td>7</td>
				<td>10</td>
				<td>11</td>				
			</tr>
			<tr>
				<td>14</td>
				<td>15</td>
				<td>18</td>
				<td>19</td>
				<td>22</td>
				<td>23</td>				
			</tr>
			<tr>
				<td>26</td>
				<td>27</td>
				<td>30</td>
				<td>31</td>
				<td>34</td>
				<td>35</td>

			</tr>
			<tr>
				<td>38</td>
				<td>39</td>
				<td>42</td>
				<td>43</td>
				<td>46</td>
				<td>47</td>				
			</tr>
			<tr>
				<td>50</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
		</table>
		
	</div>
	<div id="empat" class="hidden">
		<table border="1">
			<tr>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>12</td>
				<td>13</td>				
			</tr>
			<tr>
				<td>14</td>
				<td>15</td>
				<td>20</td>
				<td>21</td>
				<td>22</td>
				<td>23</td>				
			</tr>
			<tr>
				<td>28</td>
				<td>29</td>
				<td>30</td>
				<td>31</td>
				<td>36</td>
				<td>37</td>

			</tr>
			<tr>
				<td>38</td>
				<td>39</td>
				<td>44</td>
				<td>45</td>
				<td>46</td>
				<td>47</td>				
			</tr>
			
		</table>
		
	</div>
	<div id="delapan" class="hidden">
		<table border="1">
			<tr>
				<td>8</td>
				<td>9</td>
				<td>10</td>
				<td>11</td>
				<td>12</td>
				<td>13</td>				
			</tr>
			<tr>
				<td>14</td>
				<td>15</td>
				<td>24</td>
				<td>25</td>
				<td>26</td>
				<td>27</td>				
			</tr>
			<tr>
				<td>28</td>
				<td>29</td>
				<td>30</td>
				<td>31</td>
				<td>40</td>
				<td>41</td>

			</tr>
			<tr>
				<td>42</td>
				<td>43</td>
				<td>44</td>
				<td>45</td>
				<td>46</td>
				<td>47</td>				
			</tr>
			
		</table>
		
	</div>
	<div id="enambelas" class="hidden">
		<table border="1">
			<tr>
				<td>16</td>
				<td>17</td>
				<td>18</td>
				<td>19</td>
				<td>20</td>
				<td>21</td>				
			</tr>
			<tr>
				<td>22</td>
				<td>23</td>
				<td>24</td>
				<td>25</td>
				<td>26</td>
				<td>27</td>				
			</tr>
			<tr>
				<td>28</td>
				<td>29</td>
				<td>30</td>
				<td>31</td>
				<td>48</td>
				<td>49</td>

			</tr>
			<tr>
				<td>50</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			
		</table>
		
	</div>
	<div id="tigadua" class="hidden">
		<table border="1">
			<tr>
				<td>32</td>
				<td>33</td>
				<td>34</td>
				<td>35</td>
				<td>36</td>				
			</tr>
			<tr>
				<td>37</td>
				<td>38</td>
				<td>39</td>
				<td>40</td>
				<td>41</td>				
			</tr>
			<tr>
				<td>42</td>
				<td>43</td>
				<td>44</td>
				<td>45</td>
				<td>46</td>				

			</tr>
			<tr>
				<td>47</td>
				<td>48</td>
				<td>49</td>
				<td>50</td>
				<td></td>
								
			</tr>
			
		</table>
		
	</div>
	<div id="hasil">
		<h1></h1>
		
	</div>
</section>

<section>
	<div id='nol'><p>Pilih angka 1 - 50 !</p></div>
	<div id="sembilan" class="hidden"><p>Apakah ada angka yg kamu pilih disini ? </p>
		<input type="radio" id="ya" name="ada" value="ya">
		<label for="html">Ya</label><br>
		<input type="radio" id="tidak" name="ada" value="tidak">
		<label for="css">Tidak</label><br>
	</div>
	<button id="next"> <p>Next</p> </button>
</section>


</body>
<script type="text/javascript">
	let hit=0;
	let arr=['nol','satu','dua','empat','delapan','enambelas','tigadua'];
	let arr2=[0,1,2,4,8,16,32];
	let angka=0;
	$('#next').on('click',function(e){
		
		$("#"+arr[hit]).addClass('hidden')
			
		if(hit>=1){
			
			if($('input[name="ada"]:checked').val()=='ya'){
				angka=angka+arr2[hit];					
			}
		}
		hit=hit+1;
		if((hit==6)&&(angka>18)){
			alert ('Angka yang anda pilih adalah '+angka )
			$('div').addClass('hidden')
			$('#nol').removeClass('hidden')
			$('#next').removeClass('hidden')
			hit=0;
			angka=0;
		}else if(hit==7){
			alert ('Angka yang anda pilih adalah '+angka )
			$('div').addClass('hidden')
			$('#nol').removeClass('hidden')
			$('#next').removeClass('hidden')
			hit=0;
			angka=0;
		}else {
			console.log(hit)
			
			$("#"+arr[hit]).removeClass('hidden')
			$("#sembilan").removeClass('hidden');
			$("#next").prop('disabled', true);
			$('input[name="ada"]').prop('checked', false);
		}
		
		console.log("angka"+angka)
	})

	$("input[name='ada']").change(function(){
		// console.log("clicked")
		$("#next").prop('disabled', false);
		
	})


</script>
</html>