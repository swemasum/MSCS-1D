	var plotData = [];
	var xaxis=[];
	var plotData2 = [];
	var xaxis2=[];
	var plotData3 = [];
	var xaxis3=[];
    var plotData4 = [];
	var xaxis4=[];
	var plotData5 = [];
	var xaxis5=[];
	var plotDatasunef = [];
	var xaxissunef=[];
    var saveplotDatasunef = [];
	var savexaxissunef=[];
	var e=0.00000000000000000016;
	var t=298;
	var k=0.0000000000000000000000138;
	var voc1=0,voc2=0,voc3=0;
	var jsc1=0,jsc2=0,jsc3=0;
	var counter=0;

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

								var h=0.000000000000000000000000000000000663;
								var c=300000000;
								var pi=3.1416;

								//constant value end

								//calculate jsc1
							    jsc1=C*(e*lamda1*i)/(h*c);

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
							    voc1=k*t*Math.log((jsc1/j0)+1)/e;

								console.log("voc1:"+voc1);
								document.getElementById("jsc1").value = jsc1;
								document.getElementById("voc1").value = voc1;


								var x=0;
								for(v1=0;v1<=voc1;v1=v1+0.05){


									xaxis[x]=v1.toFixed(2);
									j=-(j0*((Math.exp((e*v1)/(k*t)))-1)-jsc1);

									 plotData.push({
											x: v1.toFixed(2),
											y: j.toFixed(2)
									  });
									   x++;
								}

                                 set(plotData,xaxis);
				data(plotData);
							    efficiency();
                     }

					 function download_j1() {
					  console.log("done");
							var url_base64 = document.getElementById("line-chart-j1").toDataURL("image/png");


							link1.href = url_base64;


							var url = link1.href.replace(/^data:image\/[^;]/, 'data:application/octet-stream');

						}
			///layer 2
					 function calculate_lay2(){

			      plotData2 = [];
	              xaxis2=[];

					    var mc2 = document.getElementById("mc2").value;
						var mv2 = document.getElementById("mv2").value;
						var mue2 = document.getElementById("mue2").value;
						var muh2 = document.getElementById("muh2").value;
						var me2 = document.getElementById("me2").value;
						var mh2 = document.getElementById("mh2").value;
						var srh2 = document.getElementById("srh2").value;
						var b2 = document.getElementById("b2").value;
						var na2 = document.getElementById("na2").value;
						var nd2 = document.getElementById("nd2").value;
						var xn2 = document.getElementById("xn2").value;
						var xp2 = document.getElementById("xp2").value;
						var lamda2 = document.getElementById("lamda2").value;
						var C2= document.getElementById("C2").value;
						var i2= document.getElementById("I2").value;
						var eg2= document.getElementById("eg2").value;

								var mc3=parseFloat(mc2);
								var mv3=parseFloat(mv2);
								var mue3=parseFloat(mue2);
								var muh3=parseFloat(muh2);
							    var srh3=parseFloat(srh2);
								var me3=parseFloat(me2);
								var mh3=parseFloat(mh2);
							    var b3=parseFloat(b2);
							    var na3=parseFloat(na2);
							    var nd3=parseFloat(nd2);
							    var xn3=parseFloat(xn2);
							    var xp3=parseFloat(xp2);
							    var lamda3=parseFloat(lamda2);

								//constant value start
								var m=0.00000000000000000000000000000091;

								var h=0.000000000000000000000000000000000663;
								var c=300000000;
								var pi=3.1416;

								//constant value end

								//calculate jsc2
							    jsc2=C2*(e*lamda3*i2)/(h*c);

								//var jsc2=e*F;
								console.log("jsc2::"+jsc2);

								//calculate jsc2 end

								//calculate voc2
								var de2=(k*t*mue3)/e;
								var dh2=(k*t*muh3)/e;
								var taue2=1/((1/srh3)+(b3*na3));
								var tauh2=1/((1/srh3)+(b3*nd3));
								var se2=Math.pow((de2/taue2),0.5);
								var sh2=Math.sqrt(dh2/tauh2);
								var ni2=4*mc3*mv3*Math.pow((2*3.1416*k*t)/Math.pow(h,2),3)*Math.pow((me3*mh3),1.5)*Math.exp(-(eg2)*e/(k*t));
								var j02=(e*se2*ni2/na3)+(e*sh2*ni2/nd3);
							     voc2=k*t*Math.log((jsc2/j02)+1)/e;

								console.log("voc2:"+voc2);
								document.getElementById("jsc2").value = jsc2;
								document.getElementById("voc2").value = voc2;


								//calculate voc1 end

									var x=0;
								for(v1=0;v1<=voc2;v1=v1+0.05){


									xaxis2[x]=v1.toFixed(2);
									j=-(j02*((Math.exp((e*v1)/(k*t)))-1)-jsc2);

									 plotData2.push({
											x: v1.toFixed(2),
											y: j.toFixed(2)
									  });
									  x++;
								}

                                 set2(plotData2,xaxis2);
               data2(plotData2);
								 efficiency();

                     }

					 					 function download_j2() {
					  console.log("done");
							var url_base64 = document.getElementById("line-chart-j2").toDataURL("image/png");


							link2.href = url_base64;


							var url = link2.href.replace(/^data:image\/[^;]/, 'data:application/octet-stream');

						}
					 ///layer 3
					 function calculate_lay3(){

				      plotData3 = [];
	                  xaxis3=[];

					    var mc4 = document.getElementById("mc3").value;
						var mv4 = document.getElementById("mv3").value;
						var mue4 = document.getElementById("mue3").value;
						var muh4 = document.getElementById("muh3").value;
						var me4 = document.getElementById("me3").value;
						var mh4 = document.getElementById("mh3").value;
						var srh4 = document.getElementById("srh3").value;
						var b4 = document.getElementById("b3").value;
						var na4 = document.getElementById("na3").value;
						var nd4 = document.getElementById("nd3").value;
						var xn4 = document.getElementById("xn3").value;
						var xp4 = document.getElementById("xp3").value;
						var lamda4 = document.getElementById("lamda3").value;
						var C4= document.getElementById("C3").value;
						var i4= document.getElementById("I3").value;
						var eg4= document.getElementById("eg3").value;


								var mc5=parseFloat(mc4);
								var mv5=parseFloat(mv4);
								var mue5=parseFloat(mue4);
								var muh5=parseFloat(muh4);
							    var srh5=parseFloat(srh4);
								var me5=parseFloat(me4);
								var mh5=parseFloat(mh4);
							    var b5=parseFloat(b4);
							    var na5=parseFloat(na4);
							    var nd5=parseFloat(nd4);
							    var xn5=parseFloat(xn4);
							    var xp5=parseFloat(xp4);
							    var lamda5=parseFloat(lamda4);

								//constant value start
								var m=0.00000000000000000000000000000091;

								var h=0.000000000000000000000000000000000663;
								var c=300000000;
								var pi=3.1416;

								//constant value end

								//calculate jsc3
							    jsc3=C4*(e*lamda5*i4)/(h*c);

								//var jsc1=e*F;
								console.log("jsc3::"+jsc3);

								//calculate jsc3 end

								//calculate voc3
								var de3=(k*t*mue5)/e;
								var dh3=(k*t*muh5)/e;
								var taue3=1/((1/srh5)+(b5*na5));
								var tauh3=1/((1/srh5)+(b5*nd5));
								var se3=Math.pow((de3/taue3),0.5);
								var sh3=Math.sqrt(dh3/tauh3);
								var ni3=4*mc5*mv5*Math.pow((2*3.1416*k*t)/Math.pow(h,2),3)*Math.pow((me5*mh5),1.5)*Math.exp(-(eg4)*e/(k*t));
								var j03=(e*se3*ni3/na5)+(e*sh3*ni3/nd5);
							    voc3=k*t*Math.log((jsc3/j03)+1)/e;

								console.log("voc3:"+voc3);
								document.getElementById("jsc3").value = jsc3;
								document.getElementById("voc3").value = voc3;
								//calculate voc3 end

										var x=0;
								for(v1=0;v1<=voc3;v1=v1+0.05){


									xaxis3[x]=v1.toFixed(2);
									j=-(j03*((Math.exp((e*v1)/(k*t)))-1)-jsc3);

									 plotData3.push({
											x: v1.toFixed(2),
											y: j.toFixed(2)
									  });
									  x++;
								}

                                 set3(plotData3,xaxis3);
                    data3(plotData3);
								 efficiency();

                     }

					 	 function download_j3() {
					  console.log("done");
							var url_base64 = document.getElementById("line-chart-j3").toDataURL("image/png");


							link3.href = url_base64;


							var url = link3.href.replace(/^data:image\/[^;]/, 'data:application/octet-stream');

						}

					  ///layer 4
					 function calculate_lay4(){

				      plotData4 = [];
	                  xaxis4=[];

					    var mc5 = document.getElementById("mc4").value;
						var mv5 = document.getElementById("mv4").value;
						var mue5 = document.getElementById("mue4").value;
						var muh5 = document.getElementById("muh4").value;
						var me5 = document.getElementById("me4").value;
						var mh5 = document.getElementById("mh4").value;
						var srh5 = document.getElementById("srh4").value;
						var b5 = document.getElementById("b4").value;
						var na5 = document.getElementById("na4").value;
						var nd5 = document.getElementById("nd4").value;
						var xn5 = document.getElementById("xn4").value;
						var xp5 = document.getElementById("xp4").value;
						var lamda5 = document.getElementById("lamda4").value;
						var C5= document.getElementById("C4").value;
						var i5= document.getElementById("I4").value;
						var eg5= document.getElementById("eg4").value;


								var mc5=parseFloat(mc5);
								var mv5=parseFloat(mv5);
								var mue5=parseFloat(mue5);
								var muh5=parseFloat(muh5);
							    var srh5=parseFloat(srh5);
								var me5=parseFloat(me5);
								var mh5=parseFloat(mh5);
							    var b5=parseFloat(b5);
							    var na5=parseFloat(na5);
							    var nd5=parseFloat(nd5);
							    var xn5=parseFloat(xn5);
							    var xp5=parseFloat(xp5);
							    var lamda5=parseFloat(lamda5);

								//constant value start
								var m=0.00000000000000000000000000000091;

								var h=0.000000000000000000000000000000000663;
								var c=300000000;
								var pi=3.1416;

								//constant value end

								//calculate jsc3
							    jsc4=C5*(e*lamda5*i5)/(h*c);

								//var jsc1=e*F;
								console.log("jsc4::"+jsc4);

								//calculate jsc3 end

								//calculate voc3
								var de4=(k*t*mue5)/e;
								var dh4=(k*t*muh5)/e;
								var taue4=1/((1/srh5)+(b5*na5));
								var tauh4=1/((1/srh5)+(b5*nd5));
								var se4=Math.pow((de4/taue4),0.5);
								var sh4=Math.sqrt(dh4/tauh4);
								var ni4=4*mc5*mv5*Math.pow((2*3.1416*k*t)/Math.pow(h,2),3)*Math.pow((me5*mh5),1.5)*Math.exp(-(eg5)*e/(k*t));
								var j04=(e*se4*ni4/na5)+(e*sh4*ni4/nd5);
							    voc4=k*t*Math.log((jsc4/j04)+1)/e;

								console.log("voc4:"+voc4);
								document.getElementById("jsc4").value = jsc4;
								document.getElementById("voc4").value = voc4;
								//calculate voc3 end

										var x=0;
								for(v1=0;v1<=voc4;v1=v1+0.05){


									xaxis4[x]=v1.toFixed(2);
									j=-(j04*((Math.exp((e*v1)/(k*t)))-1)-jsc4);

									 plotData4.push({
											x: v1.toFixed(2),
											y: j.toFixed(2)
									  });
									  x++;
								}

                                 set4(plotData4,xaxis4);
                  data4(plotData4);
								 efficiency();

                     }


							 function download_j4() {
					  console.log("done");
							var url_base64 = document.getElementById("line-chart-j4").toDataURL("image/png");


							link4.href = url_base64;


							var url = link4.href.replace(/^data:image\/[^;]/, 'data:application/octet-stream');

						}


											  ///layer 5
					 function calculate_lay5(){

				      plotData5 = [];
	                  xaxis5=[];

					    var mc6 = document.getElementById("mc5").value;
						var mv6 = document.getElementById("mv5").value;
						var mue6 = document.getElementById("mue5").value;
						var muh6 = document.getElementById("muh5").value;
						var me6 = document.getElementById("me5").value;
						var mh6 = document.getElementById("mh5").value;
						var srh6 = document.getElementById("srh5").value;
						var b6 = document.getElementById("b5").value;
						var na6 = document.getElementById("na5").value;
						var nd6 = document.getElementById("nd5").value;
						var xn6 = document.getElementById("xn5").value;
						var xp6 = document.getElementById("xp5").value;
						var lamda6 = document.getElementById("lamda5").value;
						var C6= document.getElementById("C5").value;
						var i6= document.getElementById("I5").value;
						var eg6= document.getElementById("eg5").value;


								var mc6=parseFloat(mc6);
								var mv6=parseFloat(mv6);
								var mue6=parseFloat(mue6);
								var muh6=parseFloat(muh6);
							    var srh6=parseFloat(srh6);
								var me6=parseFloat(me6);
								var mh6=parseFloat(mh6);
							    var b6=parseFloat(b6);
							    var na6=parseFloat(na6);
							    var nd6=parseFloat(nd6);
							    var xn6=parseFloat(xn6);
							    var xp6=parseFloat(xp6);
							    var lamda6=parseFloat(lamda6);

								//constant value start
								var m=0.00000000000000000000000000000091;

								var h=0.000000000000000000000000000000000663;
								var c=300000000;
								var pi=3.1416;

								//constant value end

								//calculate jsc3
							    jsc5=C6*(e*lamda6*i6)/(h*c);

								//var jsc1=e*F;
								console.log("jsc5::"+jsc5);

								//calculate jsc3 end

								//calculate voc3
								var de5=(k*t*mue6)/e;
								var dh5=(k*t*muh6)/e;
								var taue5=1/((1/srh6)+(b6*na6));
								var tauh5=1/((1/srh6)+(b6*nd6));
								var se5=Math.pow((de5/taue5),0.5);
								var sh5=Math.sqrt(dh5/tauh5);
								var ni5=4*mc6*mv6*Math.pow((2*3.1416*k*t)/Math.pow(h,2),3)*Math.pow((me6*mh6),1.5)*Math.exp(-(eg6)*e/(k*t));
								var j05=(e*se5*ni5/na6)+(e*sh5*ni5/nd6);
							    voc5=k*t*Math.log((jsc5/j05)+1)/e;

								console.log("voc5:"+voc5);
								document.getElementById("jsc5").value = jsc5;
								document.getElementById("voc5").value = voc5;
								//calculate voc3 end

										var x=0;
								for(v1=0;v1<=voc5;v1=v1+0.05){


									xaxis5[x]=v1.toFixed(2);
									j=-(j05*((Math.exp((e*v1)/(k*t)))-1)-jsc5);

									 plotData5.push({
											x: v1.toFixed(2),
											y: j.toFixed(2)
									  });
									  x++;
								}

                                 set5(plotData5,xaxis5);
               data5(plotData5);
								 efficiency();

                     }


							 function download_j5() {
					  console.log("done");
							var url_base64 = document.getElementById("line-chart-j5").toDataURL("image/png");


							link5.href = url_base64;


							var url = link5.href.replace(/^data:image\/[^;]/, 'data:application/octet-stream');

						}

function calall(){
	var big=[];

	if(xaxis.length>xaxis2.length && xaxis.length>xaxis3.length && xaxis.length>xaxis4.length && xaxis.length>xaxis5.length){
		big=xaxis;
	}else if(xaxis2.length>xaxis.length && xaxis2.length>xaxis3.length && xaxis2.length>xaxis4.length && xaxis2.length>xaxis5.length){
		big=xaxis2;
	}else if(xaxis3.length>xaxis.length && xaxis3.length>xaxis2.length && xaxis3.length > xaxis4.length && xaxis3.length>xaxis5.length){
		big=xaxis3;
	}else if(xaxis4.length>xaxis.length && xaxis4.length>xaxis2.length && xaxis4.length>xaxis3.length && xaxis4.length>xaxis5.length){
		big=xaxis4;
	}else{
		big=xaxis5;
	}
		console.log(plotData3);
	console.log(plotData2);
	console.log(plotData);
	console.log(big);
	setall(plotData,plotData2,plotData3,plotData4,plotData5,big);



}

				 function download_all() {
					  console.log("done");
							var url_base64 = document.getElementById("line-chart-all").toDataURL("image/png");


							link6.href = url_base64;


							var url = link6.href.replace(/^data:image\/[^;]/, 'data:application/octet-stream');

						}

////////////////////////////////////////////////////////////////////////important calculation (v-max) ////////////////////////////////////////////
function efficiency(){
	console.log("into efficiency block");
	var vmax=0;
	var v=0;
	b=e/(k*t);
		var voc=voc1+voc2+voc3+voc4+voc5;
	for(var vm=0;vm<=voc;vm=vm+0.05){

		v=voc-((1/b)*Math.log(1+(b*vm)));
		if(v==vm){
			break;
		}
	}
	vmax=v;

	console.log("vmax:"+vmax);

	var jsc_arr=[];
	jsc_arr[0]=jsc1;
	jsc_arr[1]=jsc2;
	jsc_arr[2]=jsc3;
	jsc_arr[3]=jsc4;
	jsc_arr[4]=jsc5;
	var min_jsc=Math.min(...jsc_arr);
	console.log("min_jsc:"+min_jsc);

	var jm=min_jsc*(1-(1/(b*vmax)));
	console.log("jm::"+jm);

	var ff=(vmax*jm)/(voc*min_jsc);
	console.log("ff::"+ff);
	var ef=((voc*min_jsc*ff)/(1*1000))*100;
    console.log("ef+"+ef);

	document.getElementById("jsc").value = min_jsc;
	document.getElementById("voc").value = voc;
	document.getElementById("vm").value = vmax;
	document.getElementById("jm").value = jm;
	document.getElementById("ff").value = ff;
	document.getElementById("ef").value = ef;
}






/////////////////////sun vs efficiency////////////////
var save_dataset=[];
var save_xaxis=[];

function sun_ef(){
	plotDatasunef=[];
	xaxissunef=[];
	var x=0;
              /////////////  layer 1 //////////////////////
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

								var h=0.000000000000000000000000000000000663;
								var c=300000000;
								var pi=3.1416;

								//constant value end



/////////////////// layer 2////////////////////////////////////
                        var mc2 = document.getElementById("mc2").value;
						var mv2 = document.getElementById("mv2").value;
						var mue2 = document.getElementById("mue2").value;
						var muh2 = document.getElementById("muh2").value;
						var me2 = document.getElementById("me2").value;
						var mh2 = document.getElementById("mh2").value;
						var srh2 = document.getElementById("srh2").value;
						var b2 = document.getElementById("b2").value;
						var na2 = document.getElementById("na2").value;
						var nd2 = document.getElementById("nd2").value;
						var xn2 = document.getElementById("xn2").value;
						var xp2 = document.getElementById("xp2").value;
						var lamda2 = document.getElementById("lamda2").value;
						var C2= document.getElementById("C2").value;
						var i2= document.getElementById("I2").value;
						var eg2= document.getElementById("eg2").value;

								var mc3=parseFloat(mc2);
								var mv3=parseFloat(mv2);
								var mue3=parseFloat(mue2);
								var muh3=parseFloat(muh2);
							    var srh3=parseFloat(srh2);
								var me3=parseFloat(me2);
								var mh3=parseFloat(mh2);
							    var b3=parseFloat(b2);
							    var na3=parseFloat(na2);
							    var nd3=parseFloat(nd2);
							    var xn3=parseFloat(xn2);
							    var xp3=parseFloat(xp2);
							    var lamda3=parseFloat(lamda2);



						///////////layer 3////////////

					    var mc4 = document.getElementById("mc3").value;
						var mv4 = document.getElementById("mv3").value;
						var mue4 = document.getElementById("mue3").value;
						var muh4 = document.getElementById("muh3").value;
						var me4 = document.getElementById("me3").value;
						var mh4 = document.getElementById("mh3").value;
						var srh4 = document.getElementById("srh3").value;
						var b4 = document.getElementById("b3").value;
						var na4 = document.getElementById("na3").value;
						var nd4 = document.getElementById("nd3").value;
						var xn4 = document.getElementById("xn3").value;
						var xp4 = document.getElementById("xp3").value;
						var lamda4 = document.getElementById("lamda3").value;
						var C4= document.getElementById("C3").value;
						var i4= document.getElementById("I3").value;
						var eg4= document.getElementById("eg3").value;


								var mc5=parseFloat(mc4);
								var mv5=parseFloat(mv4);
								var mue5=parseFloat(mue4);
								var muh5=parseFloat(muh4);
							    var srh5=parseFloat(srh4);
								var me5=parseFloat(me4);
								var mh5=parseFloat(mh4);
							    var b5=parseFloat(b4);
							    var na5=parseFloat(na4);
							    var nd5=parseFloat(nd4);
							    var xn5=parseFloat(xn4);
							    var xp5=parseFloat(xp4);
							    var lamda5=parseFloat(lamda4);


					///////////layer 4////////////

					 var mc6 = document.getElementById("mc4").value;
						var mv6 = document.getElementById("mv4").value;
						var mue6 = document.getElementById("mue4").value;
						var muh6 = document.getElementById("muh4").value;
						var me6 = document.getElementById("me4").value;
						var mh6 = document.getElementById("mh4").value;
						var srh6 = document.getElementById("srh4").value;
						var b6 = document.getElementById("b4").value;
						var na6 = document.getElementById("na4").value;
						var nd6 = document.getElementById("nd4").value;
						var xn6 = document.getElementById("xn4").value;
						var xp6 = document.getElementById("xp4").value;
						var lamda6 = document.getElementById("lamda4").value;
						var C6= document.getElementById("C4").value;
						var i6= document.getElementById("I4").value;
						var eg6= document.getElementById("eg4").value;


								var mc6=parseFloat(mc6);
								var mv6=parseFloat(mv6);
								var mue6=parseFloat(mue6);
								var muh6=parseFloat(muh6);
							    var srh6=parseFloat(srh6);
								var me6=parseFloat(me6);
								var mh6=parseFloat(mh6);
							    var b6=parseFloat(b6);
							    var na6=parseFloat(na6);
							    var nd6=parseFloat(nd6);
							    var xn6=parseFloat(xn6);
							    var xp6=parseFloat(xp6);
							    var lamda6=parseFloat(lamda6);


								///layer 5


								var mc7 = document.getElementById("mc5").value;
							var mv7 = document.getElementById("mv5").value;
							var mue7 = document.getElementById("mue5").value;
							var muh7 = document.getElementById("muh5").value;
							var me7 = document.getElementById("me5").value;
							var mh7 = document.getElementById("mh5").value;
							var srh7 = document.getElementById("srh5").value;
							var b7 = document.getElementById("b5").value;
							var na7 = document.getElementById("na5").value;
							var nd7 = document.getElementById("nd5").value;
							var xn7 = document.getElementById("xn5").value;
							var xp7 = document.getElementById("xp5").value;
							var lamda7 = document.getElementById("lamda5").value;
							var C7= document.getElementById("C5").value;
							var i7= document.getElementById("I5").value;
							var eg7= document.getElementById("eg5").value;


									var mc7=parseFloat(mc7);
									var mv7=parseFloat(mv7);
									var mue7=parseFloat(mue7);
									var muh7=parseFloat(muh7);
								    var srh7=parseFloat(srh7);
									var me7=parseFloat(me7);
									var mh7=parseFloat(mh7);
								    var b7=parseFloat(b7);
								    var na7=parseFloat(na7);
								    var nd7=parseFloat(nd7);
								    var xn7=parseFloat(xn7);
								    var xp7=parseFloat(xp7);
								    var lamda7=parseFloat(lamda7);



						var sun_min=document.getElementById("c_min").value;
						var sun_max=document.getElementById("c_max").value;

						var array_jsc=[];
						var min_jsc;
						var vmax=0;
						var v=0;
						b=e/(k*t);
						for(var G=sun_min;G<=sun_max;G++){
							console.log("step::::"+G);



								//calculate voc1_sun_eff
							    voc1_sun_eff=G*((e*lamda1*i)/(h*c));
								//calculate voc1_sun_eff
								var de=(k*t*mue1)/e;
								var dh=(k*t*muh1)/e;
								var taue=1/((1/srh1)+(b1*na1));
								var tauh=1/((1/srh1)+(b1*nd1));
								var se=Math.pow((de/taue),0.5);
								var sh=Math.sqrt(dh/tauh);
								var ni1=4*mc1*mv1*Math.pow((2*3.1416*k*t)/Math.pow(h,2),3)*Math.pow((me1*mh1),1.5)*Math.exp(-(eg)*e/(k*t));
								var j0=(e*se*ni1/na1)+(e*sh*ni1/nd1);
							    voc1_sun_eff=k*t*Math.log((voc1_sun_eff/j0)+1)/e;
								console.log("voc1_sun_eff::::::"+voc1_sun_eff);

								//calculate voc2_sun_eff
							    voc2_sun_eff=G*((e*lamda3*i2)/(h*c));

								//var voc2_sun_eff=e*F;
								console.log("voc2_sun_eff::"+voc2_sun_eff);

								//calculate voc2_sun_eff end

								//calculate voc2_sun_eff
								var de2=(k*t*mue3)/e;
								var dh2=(k*t*muh3)/e;
								var taue2=1/((1/srh3)+(b3*na3));
								var tauh2=1/((1/srh3)+(b3*nd3));
								var se2=Math.pow((de2/taue2),0.5);
								var sh2=Math.sqrt(dh2/tauh2);
								var ni2=4*mc3*mv3*Math.pow((2*3.1416*k*t)/Math.pow(h,2),3)*Math.pow((me3*mh3),1.5)*Math.exp(-(eg2)*e/(k*t));
								var j02=(e*se2*ni2/na3)+(e*sh2*ni2/nd3);
							     voc2_sun_eff=k*t*Math.log((voc2_sun_eff/j02)+1)/e;

								console.log("voc2_sun_eff::::::"+voc2_sun_eff);


								//calculate voc3_sun_eff
							    voc3_sun_eff=G*((e*lamda5*i4)/(h*c));

								//var voc1_sun_eff=e*F;
								console.log("voc3_sun_eff::"+voc3_sun_eff);

								//calculate voc3_sun_eff end

								//calculate voc3_sun_eff
								var de3=(k*t*mue5)/e;
								var dh3=(k*t*muh5)/e;
								var taue3=1/((1/srh5)+(b5*na5));
								var tauh3=1/((1/srh5)+(b5*nd5));
								var se3=Math.pow((de3/taue3),0.5);
								var sh3=Math.sqrt(dh3/tauh3);
								var ni3=4*mc5*mv5*Math.pow((2*3.1416*k*t)/Math.pow(h,2),3)*Math.pow((me5*mh5),1.5)*Math.exp(-(eg4)*e/(k*t));
								var j03=(e*se3*ni3/na5)+(e*sh3*ni3/nd5);
							    voc3_sun_eff=k*t*Math.log((voc3_sun_eff/j03)+1)/e;

								console.log("voc3_sun_eff::::::"+voc3_sun_eff);



								 //calculate voc4_sun_eff
								 //calculate jsc4_sun_eff
							jsc4_sun_eff=G*(e*lamda6*i6)/(h*c);

						//calculate jsc4_sun_eff end

						//calculate voc4_sun_eff
						var de4=(k*t*mue6)/e;
						var dh4=(k*t*muh6)/e;
						var taue4=1/((1/srh6)+(b6*na6));
						var tauh4=1/((1/srh6)+(b6*nd6));
						var se4=Math.pow((de4/taue4),0.5);
						var sh4=Math.sqrt(dh4/tauh4);
						var ni4=4*mc6*mv6*Math.pow((2*3.1416*k*t)/Math.pow(h,2),3)*Math.pow((me6*mh6),1.5)*Math.exp(-(eg6)*e/(k*t));
						var j04=(e*se4*ni4/na6)+(e*sh4*ni4/nd6);
							var voc4_sun_eff=k*t*Math.log((jsc4_sun_eff/j04)+1)/e;

							console.log("voc4_sun_eff::::::"+voc4_sun_eff);

							//calculate jsc5_sun_eff
							jsc5_sun_eff=G*(e*lamda7*i7)/(h*c);

						//var jsc1_sun_eff=e*F;
						//console.log("jsc5_sun_eff::"+jsc5_sun_eff);

						//calculate jsc5_sun_eff end

						//calculate voc5_sun_eff
						var de5=(k*t*mue7)/e;
						var dh5=(k*t*muh7)/e;
						var taue5=1/((1/srh7)+(b7*na7));
						var tauh5=1/((1/srh7)+(b6*nd7));
						var se5=Math.pow((de5/taue5),0.5);
						var sh5=Math.sqrt(dh5/tauh5);
						var ni5=4*mc7*mv7*Math.pow((2*3.1416*k*t)/Math.pow(h,2),3)*Math.pow((me7*mh7),1.5)*Math.exp(-(eg7)*e/(k*t));
						var j05=(e*se5*ni5/na7)+(e*sh5*ni5/nd7);
							voc5_sun_eff=k*t*Math.log((jsc5_sun_eff/j05)+1)/e;

					//	//console.log("voc5_sun_eff:"+voc5_sun_eff);


								array_jsc[0]=voc1_sun_eff;
								array_jsc[1]=voc2_sun_eff;
								array_jsc[2]=voc3_sun_eff;
								array_jsc[3]=voc4_sun_eff;
								array_jsc[4]=voc5_sun_eff;
								min_jsc=Math.min(...array_jsc);
								voc_sun_eff=voc1_sun_eff+voc2_sun_eff+voc3_sun_eff+voc4_sun_eff+voc5_sun_eff;
								console.log("min_jsc::::::::"+min_jsc);
								console.log("voc_sun_eff::::::::::::"+voc_sun_eff);



								for(var vm=0;vm<=voc_sun_eff;vm=vm+0.05){

									v=voc_sun_eff-((1/b)*Math.log(1+(b*vm)));
									if(v==vm){
										break;
									}
								}
								vmax=v;
								console.log("v_max::"+vmax);

								var jm=min_jsc*(1-(1/(b*vmax)));


								var ff=(vmax*jm)/(voc_sun_eff*min_jsc);

								var ef=((voc_sun_eff*min_jsc*ff)/(G*1000))*100;


										xaxissunef[x]=G;

									 plotDatasunef.push({
											x: G,
											y: ef.toFixed(2)
									  });
									  x++;
						}

						 sun_eff_graph(plotDatasunef,xaxissunef);

data6(plotDatasunef);

}

	 function download_sunvseff() {
					  console.log("done");
							var url_base64 = document.getElementById("line-chart-sunvseff").toDataURL("image/png");


							link7.href = url_base64;


							var url = link7.href.replace(/^data:image\/[^;]/, 'data:application/octet-stream');

						}
