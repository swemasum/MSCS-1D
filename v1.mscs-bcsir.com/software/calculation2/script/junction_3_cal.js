	var plotData = [];
	var xaxis=[];	
	var plotData2 = [];
	var xaxis2=[];	
	var plotData3 = [];
	var xaxis3=[];	
function calculate_lay1(){
	plotData = [];
	xaxis=[];				   
				
		
					    var mc = document.getElementById("mc").value;
						var mv = document.getElementById("mv").value;
						var mue = document.getElementById("mue").value;
						var muh = document.getElementById("muh").value;
						var me = document.getElementById("me").value;
						var mh = document.getElementById("mh").value;
						var srh = document.getElementById("srh").value;
						var b = document.getElementById("b").value;
						var na = document.getElementById("na").value;
						var nd = document.getElementById("nd").value;
						var xn = document.getElementById("xn").value;
						var xp = document.getElementById("xp").value;
						var lamda = document.getElementById("lamda").value;
						var C= document.getElementById("C").value;
						var i= document.getElementById("I").value;
						var eg= document.getElementById("eg").value;
						
						console.log("i:"+i);
								var mc1=parseFloat(mc);
								var mv1=parseFloat(mv);
								var mue1=parseFloat(mue);
								var muh1=parseFloat(muh);
							    var srh1=parseFloat(srh);
								var me1=parseFloat(me);
								var mh1=parseFloat(mh);
							    var b1=parseFloat(b);
							    var na1=parseFloat(na);
							    var nd1=parseFloat(nd);
							    var xn1=parseFloat(xn);
							    var xp1=parseFloat(xp);
							    var lamda1=parseFloat(lamda);
								
								//constant value start
								var m=0.00000000000000000000000000000091;
								var e=0.00000000000000000016;
								var t=298;
								var k=0.0000000000000000000000138;
								var h=0.000000000000000000000000000000000663;
								var c=300000000;
								var pi=3.1416;
							    
								//constant value end
						     		
								//calculate jsc1
							    var jsc1=(e*lamda1*i)/(h*c);
							
								//var jsc1=e*F;
								console.log("jsc1::"+jsc1);
								
								//calculate jsc1 end
								
								//calculate voc1
								var de=(k*t*mue1)/e;
								var dh=(k*t*muh1)/e;
								var taue=1/((1/srh1)+(b1*na1));
								var tauh=1/((1/srh1)+(b1*nd1));
								var se=Math.pow((de/taue),0.5);
								var sh=Math.sqrt(dh/tauh);
								var ni1=4*mc1*mv1*Math.pow((2*3.1416*k*t)/Math.pow(h,2),3)*Math.pow((me1*mh1),1.5)*Math.exp(-(eg)*e/(k*t));
								var j0=(e*se*ni1/na1)+(e*sh*ni1/nd1);
							    var voc1=k*t*Math.log((jsc1/j0)+1)/e;
								
								console.log("voc1:"+voc1);
								document.getElementById("jsc1").value = jsc1;
								document.getElementById("voc1").value = voc1;
								
								
								var x=0;
								for(v1=0;v1<=voc1;v1=v1+0.01){
									 
                                   
									xaxis[x]=v1.toFixed(2);
									j=-(j0*((Math.exp((e*v1)/(k*t)))-1)-jsc1);
									
									 plotData.push({
											x: v1.toFixed(2),
											y: j.toFixed(2)
									  });
									   x++;
								}
								
                                 set(plotData,xaxis);
				
							 
                     }
			
					 function calculate_lay2(){
					   
			      plotData2 = [];
	              xaxis2=[];	
		
					    var mc = document.getElementById("mc2").value;
						var mv = document.getElementById("mv2").value;
						var mue = document.getElementById("mue2").value;
						var muh = document.getElementById("muh2").value;
						var me = document.getElementById("me2").value;
						var mh = document.getElementById("mh2").value;
						var srh = document.getElementById("srh2").value;
						var b = document.getElementById("b2").value;
						var na = document.getElementById("na2").value;
						var nd = document.getElementById("nd2").value;
						var xn = document.getElementById("xn2").value;
						var xp = document.getElementById("xp2").value;
						var lamda = document.getElementById("lamda2").value;
						var C= document.getElementById("C2").value;
						var i= document.getElementById("I2").value;
						var eg= document.getElementById("eg2").value;
						
						console.log("i:"+i);
								var mc1=parseFloat(mc);
								var mv1=parseFloat(mv);
								var mue1=parseFloat(mue);
								var muh1=parseFloat(muh);
							    var srh1=parseFloat(srh);
								var me1=parseFloat(me);
								var mh1=parseFloat(mh);
							    var b1=parseFloat(b);
							    var na1=parseFloat(na);
							    var nd1=parseFloat(nd);
							    var xn1=parseFloat(xn);
							    var xp1=parseFloat(xp);
							    var lamda1=parseFloat(lamda);
								
								//constant value start
								var m=0.00000000000000000000000000000091;
								var e=0.00000000000000000016;
								var t=298;
								var k=0.0000000000000000000000138;
								var h=0.000000000000000000000000000000000663;
								var c=300000000;
								var pi=3.1416;
							    
								//constant value end
						     		
								//calculate jsc1
							    var jsc1=(e*lamda1*i)/(h*c);
							
								//var jsc1=e*F;
								console.log("jsc1::"+jsc1);
								
								//calculate jsc1 end
								
								//calculate voc1
								var de=(k*t*mue1)/e;
								var dh=(k*t*muh1)/e;
								var taue=1/((1/srh1)+(b1*na1));
								var tauh=1/((1/srh1)+(b1*nd1));
								var se=Math.pow((de/taue),0.5);
								var sh=Math.sqrt(dh/tauh);
								var ni1=4*mc1*mv1*Math.pow((2*3.1416*k*t)/Math.pow(h,2),3)*Math.pow((me1*mh1),1.5)*Math.exp(-(eg)*e/(k*t));
								var j0=(e*se*ni1/na1)+(e*sh*ni1/nd1);
							    var voc1=k*t*Math.log((jsc1/j0)+1)/e;
								
								console.log("voc1:"+voc1);
								document.getElementById("jsc2").value = jsc1;
								document.getElementById("voc2").value = voc1;
								
								
								//calculate voc1 end
								
									var x=0;
								for(v1=0;v1<=voc1;v1=v1+0.01){
									 
                                    
									xaxis2[x]=v1.toFixed(2);
									j=-(j0*((Math.exp((e*v1)/(k*t)))-1)-jsc1);
									
									 plotData2.push({
											x: v1.toFixed(2),
											y: j.toFixed(2)
									  });
									  x++;
								}
								
                                 set2(plotData2,xaxis2);
							 
                     }
					 function calculate_lay3(){
					   
				      plotData3 = [];
	                  xaxis3=[];	
		
					    var mc = document.getElementById("mc3").value;
						var mv = document.getElementById("mv3").value;
						var mue = document.getElementById("mue3").value;
						var muh = document.getElementById("muh3").value;
						var me = document.getElementById("me3").value;
						var mh = document.getElementById("mh3").value;
						var srh = document.getElementById("srh3").value;
						var b = document.getElementById("b3").value;
						var na = document.getElementById("na3").value;
						var nd = document.getElementById("nd3").value;
						var xn = document.getElementById("xn3").value;
						var xp = document.getElementById("xp3").value;
						var lamda = document.getElementById("lamda3").value;
						var C= document.getElementById("C3").value;
						var i= document.getElementById("I3").value;
						var eg= document.getElementById("eg3").value;
						
						console.log("i:"+i);
								var mc1=parseFloat(mc);
								var mv1=parseFloat(mv);
								var mue1=parseFloat(mue);
								var muh1=parseFloat(muh);
							    var srh1=parseFloat(srh);
								var me1=parseFloat(me);
								var mh1=parseFloat(mh);
							    var b1=parseFloat(b);
							    var na1=parseFloat(na);
							    var nd1=parseFloat(nd);
							    var xn1=parseFloat(xn);
							    var xp1=parseFloat(xp);
							    var lamda1=parseFloat(lamda);
								
								//constant value start
								var m=0.00000000000000000000000000000091;
								var e=0.00000000000000000016;
								var t=298;
								var k=0.0000000000000000000000138;
								var h=0.000000000000000000000000000000000663;
								var c=300000000;
								var pi=3.1416;
							    
								//constant value end
						     		
								//calculate jsc1
							    var jsc1=(e*lamda1*i)/(h*c);
							
								//var jsc1=e*F;
								console.log("jsc1::"+jsc1);
								
								//calculate jsc1 end
								
								//calculate voc1
								var de=(k*t*mue1)/e;
								var dh=(k*t*muh1)/e;
								var taue=1/((1/srh1)+(b1*na1));
								var tauh=1/((1/srh1)+(b1*nd1));
								var se=Math.pow((de/taue),0.5);
								var sh=Math.sqrt(dh/tauh);
								var ni1=4*mc1*mv1*Math.pow((2*3.1416*k*t)/Math.pow(h,2),3)*Math.pow((me1*mh1),1.5)*Math.exp(-(eg)*e/(k*t));
								var j0=(e*se*ni1/na1)+(e*sh*ni1/nd1);
							    var voc1=k*t*Math.log((jsc1/j0)+1)/e;
								
								console.log("voc1:"+voc1);
								document.getElementById("jsc3").value = jsc1;
								document.getElementById("voc3").value = voc1;
								//calculate voc1 end
								
										var x=0;
								for(v1=0;v1<=voc1;v1=v1+0.01){
									 
                                    
									xaxis3[x]=v1.toFixed(2);
									j=-(j0*((Math.exp((e*v1)/(k*t)))-1)-jsc1);
									
									 plotData3.push({
											x: v1.toFixed(2),
											y: j.toFixed(2)
									  });
									  x++;
								}
								
                                 set3(plotData3,xaxis3);
							 
                     }
					

function calall(){
	var big=[];
	if(xaxis.length>xaxis2.length && xaxis.length>xaxis3.length){
		big=xaxis;
	}else if(xaxis2.length>xaxis.length && xaxis2.length>xaxis3.length){
		big=xaxis2;
	}else{
		big=xaxis3;
	}
		console.log(plotData3);
	console.log(plotData2);
	console.log(plotData);
	console.log(big);
	setall(plotData,plotData2,plotData3,big);

	
	
}					
					 
					 
					 