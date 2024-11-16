

							function myFunction() {
								var x = document.getElementById("mySelect").value;
								console.log(x)
								if(x=="GaInP2"){

									var mc=1;
									var mv=3;
									var mue=0.4;
									var muh=0.02;
									var me=0.155*9.1e-31;
									var mh= 0.460*9.1e-31;
									var srh= 1e-5;
									var b=7.5e-16;
									var na=1e23;
									var nd=2e24;
							//	var xn=208e-9;
							//	var xp=100e-9;
									var xn=100e-9;
									var xp=208e-9;
									var lamda=0.65428e-6;
									//var eg=1.9;
									var eg=1.9;

								document.getElementById("mc").value = mc;
								document.getElementById("mv").value = mv;
								document.getElementById("mue").value = mue;
								document.getElementById("muh").value = muh;
								document.getElementById("me").value = me;
								document.getElementById("mh").value = mh;
								document.getElementById("srh").value = srh;
								document.getElementById("b").value = b;
								document.getElementById("na").value = na;
								document.getElementById("nd").value = nd;
								document.getElementById("xn").value = xn;
								document.getElementById("xp").value = xp;
								document.getElementById("lamda").value = lamda;
								document.getElementById("eg").value = eg;
								document.getElementById("C").value = 1;
								}else if(x=="GaAs"){

								var mc=1;
								var mv=1;
								var mue=0.2322;
								var muh=0.02;
								var me=0.067*9.1e-31;
								var mh= 0.473*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=9e23;
								var nd=7.8e23;
								var xn=100e-9;
								var xp=300e-9;
								var lamda=0.875e-6;
								var eg=1.42;

								document.getElementById("mc").value = mc;
								document.getElementById("mv").value = mv;
								document.getElementById("mue").value = mue;
								document.getElementById("muh").value = muh;
								document.getElementById("me").value = me;
								document.getElementById("mh").value = mh;
								document.getElementById("srh").value = srh;
								document.getElementById("b").value = b;
								document.getElementById("na").value = na;
								document.getElementById("nd").value = nd;
								document.getElementById("xn").value = xn;
								document.getElementById("xp").value = xp;
								document.getElementById("lamda").value = lamda;
								document.getElementById("eg").value = eg;
								document.getElementById("C").value = 1;
								}else if(x=="ge"){
								var mc=1;
								var mv=1;
								var mue=0.39;
								var muh=0.19;
								var me=1.64*9.1e-31;
								var mh= 0.28*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=1e23;
								var nd=2e24;
								var xn=400e-9;
								var xp=100e-9;
								var lamda=1.775e-6;
								var eg=0.67;

								document.getElementById("mc").value = mc;
								document.getElementById("mv").value = mv;
								document.getElementById("mue").value = mue;
								document.getElementById("muh").value = muh;
								document.getElementById("me").value = me;
								document.getElementById("mh").value = mh;
								document.getElementById("srh").value = srh;
								document.getElementById("b").value = b;
								document.getElementById("na").value = na;
								document.getElementById("nd").value = nd;
								document.getElementById("xn").value = xn;
								document.getElementById("xp").value = xp;
								document.getElementById("lamda").value = lamda;
								document.getElementById("eg").value = eg;
								document.getElementById("C").value = 1;
								}else if(x=="GaAs.96Bi.04"){
								var mc=1;
								var mv=1;
								var mue=0.135;
								var muh=0.006;
								//var me=1*9.1e-31;
								var me=0.067*9.1e-31;
							//	var mh= 0.067*9.1e-31;
								var mh= 0.51*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=3.5e23;
								var nd=1.2e24;
								var xn=100e-9;
								var xp=300e-9;
								var lamda=1.138e-6;
								//var eg=1.09;
									var eg=1.09;

								document.getElementById("mc").value = mc;
								document.getElementById("mv").value = mv;
								document.getElementById("mue").value = mue;
								document.getElementById("muh").value = muh;
								document.getElementById("me").value = me;
								document.getElementById("mh").value = mh;
								document.getElementById("srh").value = srh;
								document.getElementById("b").value = b;
								document.getElementById("na").value = na;
								document.getElementById("nd").value = nd;
								document.getElementById("xn").value = xn;
								document.getElementById("xp").value = xp;
								document.getElementById("lamda").value = lamda;
								document.getElementById("eg").value = eg;
								document.getElementById("C").value = 1;
								}else if(x=="GaAs.95Bi.05"){
								var mc=1;
								var mv=1;
								var mue=0.1350;
								var muh=0.0008;
								var me=0.067*9.1e-31;
								var mh= 0.51*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=3e23;
								var nd=5.2e23;
								var xn=100e-9;
								var xp=400e-9;
								var lamda=1.141e-6;
								var eg=1.0;

								document.getElementById("mc").value = mc;
								document.getElementById("mv").value = mv;
								document.getElementById("mue").value = mue;
								document.getElementById("muh").value = muh;
								document.getElementById("me").value = me;
								document.getElementById("mh").value = mh;
								document.getElementById("srh").value = srh;
								document.getElementById("b").value = b;
								document.getElementById("na").value = na;
								document.getElementById("nd").value = nd;
								document.getElementById("xn").value = xn;
								document.getElementById("xp").value = xp;
								document.getElementById("lamda").value = lamda;
								document.getElementById("eg").value = eg;
								document.getElementById("C").value = 1;
							}else if(x=="GaAs.94Bi.06"){
								var mc=1;
								var mv=1;
								var mue=0.1330;
								var muh=0.0008;
								var me=0.067*9.1e-31;
								var mh= 0.51*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=2e23;
								var nd=5e23;
								var xn=100e-9;
								var xp=400e-9;
								var lamda=1.332e-6;
								var eg=0.92;

								document.getElementById("mc").value = mc;
								document.getElementById("mv").value = mv;
								document.getElementById("mue").value = mue;
								document.getElementById("muh").value = muh;
								document.getElementById("me").value = me;
								document.getElementById("mh").value = mh;
								document.getElementById("srh").value = srh;
								document.getElementById("b").value = b;
								document.getElementById("na").value = na;
								document.getElementById("nd").value = nd;
								document.getElementById("xn").value = xn;
								document.getElementById("xp").value = xp;
								document.getElementById("lamda").value = lamda;
								document.getElementById("eg").value = eg;
								document.getElementById("C").value = 1;
								}else if(x=="GaAs.92Bi.08"){
									var mc=1;
									var mv=1;
									var mue=0.1310;
									var muh=0.0020;
									var me=0.067*9.1e-31;
									var mh= 0.51*9.1e-31;
									var srh= 1e-5;
									var b=7.5e-16;
									var na=1.5e23;
									var nd=2.4e23;
									var xn=100e-9;
									var xp=500e-9;
									var lamda=1.775e-6;
									var eg=0.704;


									document.getElementById("mc").value = mc;
									document.getElementById("mv").value = mv;
									document.getElementById("mue").value = mue;
									document.getElementById("muh").value = muh;
									document.getElementById("me").value = me;
									document.getElementById("mh").value = mh;
									document.getElementById("srh").value = srh;
									document.getElementById("b").value = b;
									document.getElementById("na").value = na;
									document.getElementById("nd").value = nd;
									document.getElementById("xn").value = xn;
									document.getElementById("xp").value = xp;
									document.getElementById("lamda").value = lamda;
									document.getElementById("eg").value = eg;
									document.getElementById("C").value = 1;
								}else if(x=="Si.5714Ge.428"){
										var mc=1;
										var mv=1;
										var mue=0.246916;
										var muh=0.107033;
										var me=0.2411*9.1e-31;
										var mh= 0.28*9.1e-31;
										var srh= 1e-5;
										var b=7.5e-16;
										var na=1e23;
										var nd=2e24;
										var xn=400e-9;
										var xp=100e-9;
										var lamda=1.3055e-6;
										var eg=0.8;


										document.getElementById("mc").value = mc;
										document.getElementById("mv").value = mv;
										document.getElementById("mue").value = mue;
										document.getElementById("muh").value = muh;
										document.getElementById("me").value = me;
										document.getElementById("mh").value = mh;
										document.getElementById("srh").value = srh;
										document.getElementById("b").value = b;
										document.getElementById("na").value = na;
										document.getElementById("nd").value = nd;
										document.getElementById("xn").value = xn;
										document.getElementById("xp").value = xp;
										document.getElementById("lamda").value = lamda;
										document.getElementById("eg").value = eg;
										document.getElementById("C").value = 1;
										}





							}

							function myFunction2() {
								var x = document.getElementById("mySelect2").value;
								console.log(x)
								if(x=="GaInP2"){

								var mc=1;
								var mv=3;
								var mue=0.4;
								var muh=0.02;
								var me=0.155*9.1e-31;
								var mh= 0.460*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=1e23;
								var nd=2e24;
								var xn=208e-9;
								var xp=100e-9;
								var lamda=0.65428e-6;
								var eg=1.9;

								document.getElementById("mc2").value = mc;
								document.getElementById("mv2").value = mv;
								document.getElementById("mue2").value = mue;
								document.getElementById("muh2").value = muh;
								document.getElementById("me2").value = me;
								document.getElementById("mh2").value = mh;
								document.getElementById("srh2").value = srh;
								document.getElementById("b2").value = b;
								document.getElementById("na2").value = na;
								document.getElementById("nd2").value = nd;
								document.getElementById("xn2").value = xn;
								document.getElementById("xp2").value = xp;
								document.getElementById("lamda2").value = lamda;
								document.getElementById("eg2").value = eg;
								document.getElementById("C2").value = 1;
								}else if(x=="GaAs"){

								var mc=1;
								var mv=1;
								var mue=0.2322;
								var muh=0.02;
								var me=0.067*9.1e-31;
								var mh= 0.473*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=9e23;
								var nd=7.8e23;
								var xn=300e-9;
								var xp=100e-9;
								var lamda=0.875e-6;
								var eg=1.42;

								document.getElementById("mc2").value = mc;
								document.getElementById("mv2").value = mv;
								document.getElementById("mue2").value = mue;
								document.getElementById("muh2").value = muh;
								document.getElementById("me2").value = me;
								document.getElementById("mh2").value = mh;
								document.getElementById("srh2").value = srh;
								document.getElementById("b2").value = b;
								document.getElementById("na2").value = na;
								document.getElementById("nd2").value = nd;
								document.getElementById("xn2").value = xn;
								document.getElementById("xp2").value = xp;
								document.getElementById("lamda2").value = lamda;
								document.getElementById("eg2").value = eg;
								document.getElementById("C2").value = 1;
								}else if(x=="ge"){
								var mc=1;
								var mv=1;
								var mue=0.39;
								var muh=0.19;
								var me=1.64*9.1e-31;
								var mh= 0.28*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=1e23;
								var nd=2e24;
								var xn=400e-9;
								var xp=100e-9;
								var lamda=1.775e-6;
								var eg=0.67;

								document.getElementById("mc2").value = mc;
								document.getElementById("mv2").value = mv;
								document.getElementById("mue2").value = mue;
								document.getElementById("muh2").value = muh;
								document.getElementById("me2").value = me;
								document.getElementById("mh2").value = mh;
								document.getElementById("srh2").value = srh;
								document.getElementById("b2").value = b;
								document.getElementById("na2").value = na;
								document.getElementById("nd2").value = nd;
								document.getElementById("xn2").value = xn;
								document.getElementById("xp2").value = xp;
								document.getElementById("lamda2").value = lamda;
								document.getElementById("eg2").value = eg;
								document.getElementById("C2").value = 1;
								}else if(x=="GaAs.91Bi.085"){
								var mc=1;
								var mv=1;
								var mue=0.12;
								var muh=0.0019;
								//var me=1*9.1e-31;
								var me=1.64*9.1e-31;
							//	var mh= 0.067*9.1e-31;
								var mh= 0.044*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=2e24;
								var nd=4e25;
								var xn=100e-9;
								var xp=500e-9;
								var lamda=1.775e-6;
								//var eg=1.09;
									var eg=0.7;

									document.getElementById("mc2").value = mc;
									document.getElementById("mv2").value = mv;
									document.getElementById("mue2").value = mue;
									document.getElementById("muh2").value = muh;
									document.getElementById("me2").value = me;
									document.getElementById("mh2").value = mh;
									document.getElementById("srh2").value = srh;
									document.getElementById("b2").value = b;
									document.getElementById("na2").value = na;
									document.getElementById("nd2").value = nd;
									document.getElementById("xn2").value = xn;
									document.getElementById("xp2").value = xp;
									document.getElementById("lamda2").value = lamda;
									document.getElementById("eg2").value = eg;
									document.getElementById("C2").value = 1;
								}else if(x=="GaAs.96Bi.04"){
								var mc=1;
								var mv=1;
								var mue=0.1350;
								var muh=0.0060;
								var me=0.067*9.1e-31;
								var mh= 0.51*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=3.5e23;
								var nd=1.2e23;
								var xn=100e-9;
								var xp=300e-9;
								var lamda=1.138e-6;
								var eg=1.09;

								document.getElementById("mc2").value = mc;
								document.getElementById("mv2").value = mv;
								document.getElementById("mue2").value = mue;
								document.getElementById("muh2").value = muh;
								document.getElementById("me2").value = me;
								document.getElementById("mh2").value = mh;
								document.getElementById("srh2").value = srh;
								document.getElementById("b2").value = b;
								document.getElementById("na2").value = na;
								document.getElementById("nd2").value = nd;
								document.getElementById("xn2").value = xn;
								document.getElementById("xp2").value = xp;
								document.getElementById("lamda2").value = lamda;
								document.getElementById("eg2").value = eg;
								document.getElementById("C2").value = 1;
								}else if(x=="GaAs.95Bi.05"){
									var mc=1;
									var mv=1;
									var mue=0.1350;
									var muh=0.0008;
									var me=0.067*9.1e-31;
									var mh= 0.51*9.1e-31;
									var srh= 1e-5;
									var b=7.5e-16;
									var na=3e23;
									var nd=5.2e23;
									var xn=100e-9;
									var xp=400e-9;
									var lamda=1.141e-6;
									var eg=1.0;


								document.getElementById("mc2").value = mc;
								document.getElementById("mv2").value = mv;
								document.getElementById("mue2").value = mue;
								document.getElementById("muh2").value = muh;
								document.getElementById("me2").value = me;
								document.getElementById("mh2").value = mh;
								document.getElementById("srh2").value = srh;
								document.getElementById("b2").value = b;
								document.getElementById("na2").value = na;
								document.getElementById("nd2").value = nd;
								document.getElementById("xn2").value = xn;
								document.getElementById("xp2").value = xp;
								document.getElementById("lamda2").value = lamda;
								document.getElementById("eg2").value = eg;
								document.getElementById("C2").value = 1;
							}else if(x=="GaAs.94Bi.06"){
								var mc=1;
								var mv=1;
								var mue=0.1330;
								var muh=0.0008;
								var me=0.067*9.1e-31;
								var mh= 0.51*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=2e23;
								var nd=5e23;
								var xn=100e-9;
								var xp=400e-9;
								var lamda=1.332e-6;
								var eg=0.92;


								document.getElementById("mc2").value = mc;
								document.getElementById("mv2").value = mv;
								document.getElementById("mue2").value = mue;
								document.getElementById("muh2").value = muh;
								document.getElementById("me2").value = me;
								document.getElementById("mh2").value = mh;
								document.getElementById("srh2").value = srh;
								document.getElementById("b2").value = b;
								document.getElementById("na2").value = na;
								document.getElementById("nd2").value = nd;
								document.getElementById("xn2").value = xn;
								document.getElementById("xp2").value = xp;
								document.getElementById("lamda2").value = lamda;
								document.getElementById("eg2").value = eg;
								document.getElementById("C2").value = 1;
								}else if(x=="GaAs.92Bi.08"){
									var mc=1;
									var mv=1;
									var mue=0.1310;
									var muh=0.0020;
									var me=0.067*9.1e-31;
									var mh= 0.51*9.1e-31;
									var srh= 1e-5;
									var b=7.5e-16;
									var na=1.5e23;
									var nd=2.4e23;
									var xn=100e-9;
									var xp=500e-9;
									var lamda=1.775e-6;
									var eg=0.704;


									document.getElementById("mc2").value = mc;
									document.getElementById("mv2").value = mv;
									document.getElementById("mue2").value = mue;
									document.getElementById("muh2").value = muh;
									document.getElementById("me2").value = me;
									document.getElementById("mh2").value = mh;
									document.getElementById("srh2").value = srh;
									document.getElementById("b2").value = b;
									document.getElementById("na2").value = na;
									document.getElementById("nd2").value = nd;
									document.getElementById("xn2").value = xn;
									document.getElementById("xp2").value = xp;
									document.getElementById("lamda2").value = lamda;
									document.getElementById("eg2").value = eg;
									document.getElementById("C2").value = 1;
									}else if(x=="Si.5714Ge.428"){
											var mc=1;
											var mv=1;
											var mue=0.246916;
											var muh=0.107033;
											var me=0.2411*9.1e-31;
											var mh= 0.28*9.1e-31;
											var srh= 1e-5;
											var b=7.5e-16;
											var na=1e23;
											var nd=2e24;
											var xn=400e-9;
											var xp=100e-9;
											var lamda=1.3055e-6;
											var eg=0.8;


											document.getElementById("mc2").value = mc;
											document.getElementById("mv2").value = mv;
											document.getElementById("mue2").value = mue;
											document.getElementById("muh2").value = muh;
											document.getElementById("me2").value = me;
											document.getElementById("mh2").value = mh;
											document.getElementById("srh2").value = srh;
											document.getElementById("b2").value = b;
											document.getElementById("na2").value = na;
											document.getElementById("nd2").value = nd;
											document.getElementById("xn2").value = xn;
											document.getElementById("xp2").value = xp;
											document.getElementById("lamda2").value = lamda;
											document.getElementById("eg2").value = eg;
											document.getElementById("C2").value = 1;
											}





							}

							function myFunction3() {
								var x = document.getElementById("mySelect3").value;
								console.log(x)
								if(x=="GaInP2"){

								var mc=1;
								var mv=3;
								var mue=0.4;
								var muh=0.02;
								var me=0.155*9.1e-31;
								var mh= 0.460*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=1e23;
								var nd=2e24;
								var xn=208e-9;
								var xp=100e-9;
								var lamda=0.65428e-6;
								var eg=1.9;

								document.getElementById("mc3").value = mc;
								document.getElementById("mv3").value = mv;
								document.getElementById("mue3").value = mue;
								document.getElementById("muh3").value = muh;
								document.getElementById("me3").value = me;
								document.getElementById("mh3").value = mh;
								document.getElementById("srh3").value = srh;
								document.getElementById("b3").value = b;
								document.getElementById("na3").value = na;
								document.getElementById("nd3").value = nd;
								document.getElementById("xn3").value = xn;
								document.getElementById("xp3").value = xp;
								document.getElementById("lamda3").value = lamda;
								document.getElementById("eg3").value = eg;
								document.getElementById("C3").value = 1;
								}else if(x=="GaAs"){

								var mc=1;
								var mv=1;
								var mue=0.2322;
								var muh=0.02;
								var me=0.067*9.1e-31;
								var mh= 0.473*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=9e23;
								var nd=7.8e23;
								var xn=300e-9;
								var xp=100e-9;
								var lamda=0.875e-6;
								var eg=1.42;

								document.getElementById("mc3").value = mc;
								document.getElementById("mv3").value = mv;
								document.getElementById("mue3").value = mue;
								document.getElementById("muh3").value = muh;
								document.getElementById("me3").value = me;
								document.getElementById("mh3").value = mh;
								document.getElementById("srh3").value = srh;
								document.getElementById("b3").value = b;
								document.getElementById("na3").value = na;
								document.getElementById("nd3").value = nd;
								document.getElementById("xn3").value = xn;
								document.getElementById("xp3").value = xp;
								document.getElementById("lamda3").value = lamda;
								document.getElementById("eg3").value = eg;
								document.getElementById("C3").value = 1;
								}else if(x=="ge"){
								var mc=1;
								var mv=1;
								var mue=0.39;
								var muh=0.19;
								var me=1.64*9.1e-31;
								var mh= 0.28*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=1e23;
								var nd=2e24;
								var xn=400e-9;
								var xp=100e-9;
								var lamda=1.775e-6;
								var eg=0.67;

								document.getElementById("mc3").value = mc;
								document.getElementById("mv3").value = mv;
								document.getElementById("mue3").value = mue;
								document.getElementById("muh3").value = muh;
								document.getElementById("me3").value = me;
								document.getElementById("mh3").value = mh;
								document.getElementById("srh3").value = srh;
								document.getElementById("b3").value = b;
								document.getElementById("na3").value = na;
								document.getElementById("nd3").value = nd;
								document.getElementById("xn3").value = xn;
								document.getElementById("xp3").value = xp;
								document.getElementById("lamda3").value = lamda;
								document.getElementById("eg3").value = eg;
								document.getElementById("C3").value = 1;
								}else if(x=="GaAs.91Bi.085"){
								var mc=1;
								var mv=1;
								var mue=0.12;
								var muh=0.0019;
								//var me=1*9.1e-31;
								var me=1.64*9.1e-31;
							//	var mh= 0.067*9.1e-31;
								var mh= 0.044*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=2e24;
								var nd=4e25;
								var xn=100e-9;
								var xp=500e-9;
								var lamda=1.775e-6;
								//var eg=1.09;
									var eg=0.7;

									document.getElementById("mc3").value = mc;
									document.getElementById("mv3").value = mv;
									document.getElementById("mue3").value = mue;
									document.getElementById("muh3").value = muh;
									document.getElementById("me3").value = me;
									document.getElementById("mh3").value = mh;
									document.getElementById("srh3").value = srh;
									document.getElementById("b3").value = b;
									document.getElementById("na3").value = na;
									document.getElementById("nd3").value = nd;
									document.getElementById("xn3").value = xn;
									document.getElementById("xp3").value = xp;
									document.getElementById("lamda3").value = lamda;
									document.getElementById("eg3").value = eg;
									document.getElementById("C3").value = 1;
								}else if(x=="GaAs.96Bi.04"){
								var mc=1;
								var mv=1;
								var mue=0.1350;
								var muh=0.0060;
								var me=0.067*9.1e-31;
								var mh= 0.51*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=3.5e23;
								var nd=1.2e23;
								var xn=100e-9;
								var xp=300e-9;
								var lamda=1.138e-6;
								var eg=1.09;

								document.getElementById("mc3").value = mc;
								document.getElementById("mv3").value = mv;
								document.getElementById("mue3").value = mue;
								document.getElementById("muh3").value = muh;
								document.getElementById("me3").value = me;
								document.getElementById("mh3").value = mh;
								document.getElementById("srh3").value = srh;
								document.getElementById("b3").value = b;
								document.getElementById("na3").value = na;
								document.getElementById("nd3").value = nd;
								document.getElementById("xn3").value = xn;
								document.getElementById("xp3").value = xp;
								document.getElementById("lamda3").value = lamda;
								document.getElementById("eg3").value = eg;
								document.getElementById("C3").value = 1;
								}else if(x=="GaAs.95Bi.05"){
									var mc=1;
									var mv=1;
									var mue=0.1350;
									var muh=0.0008;
									var me=0.067*9.1e-31;
									var mh= 0.51*9.1e-31;
									var srh= 1e-5;
									var b=7.5e-16;
									var na=3e23;
									var nd=5.2e23;
									var xn=100e-9;
									var xp=400e-9;
									var lamda=1.141e-6;
									var eg=1.0;

								document.getElementById("mc3").value = mc;
								document.getElementById("mv3").value = mv;
								document.getElementById("mue3").value = mue;
								document.getElementById("muh3").value = muh;
								document.getElementById("me3").value = me;
								document.getElementById("mh3").value = mh;
								document.getElementById("srh3").value = srh;
								document.getElementById("b3").value = b;
								document.getElementById("na3").value = na;
								document.getElementById("nd3").value = nd;
								document.getElementById("xn3").value = xn;
								document.getElementById("xp3").value = xp;
								document.getElementById("lamda3").value = lamda;
								document.getElementById("eg3").value = eg;
								document.getElementById("C3").value = 1;
							}else if(x=="GaAs.94Bi.06"){
								var mc=1;
								var mv=1;
								var mue=0.1330;
								var muh=0.0008;
								var me=0.067*9.1e-31;
								var mh= 0.51*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=2e23;
								var nd=5e23;
								var xn=100e-9;
								var xp=400e-9;
								var lamda=1.332e-6;
								var eg=0.92;


								document.getElementById("mc3").value = mc;
								document.getElementById("mv3").value = mv;
								document.getElementById("mue3").value = mue;
								document.getElementById("muh3").value = muh;
								document.getElementById("me3").value = me;
								document.getElementById("mh3").value = mh;
								document.getElementById("srh3").value = srh;
								document.getElementById("b3").value = b;
								document.getElementById("na3").value = na;
								document.getElementById("nd3").value = nd;
								document.getElementById("xn3").value = xn;
								document.getElementById("xp3").value = xp;
								document.getElementById("lamda3").value = lamda;
								document.getElementById("eg3").value = eg;
								document.getElementById("C3").value = 1;
								}else if(x=="GaAs.92Bi.08"){
									var mc=1;
									var mv=1;
									var mue=0.1310;
									var muh=0.0020;
									var me=0.067*9.1e-31;
									var mh= 0.51*9.1e-31;
									var srh= 1e-5;
									var b=7.5e-16;
									var na=1.5e23;
									var nd=2.4e23;
									var xn=100e-9;
									var xp=500e-9;
									var lamda=1.775e-6;
									var eg=0.704;


									document.getElementById("mc3").value = mc;
									document.getElementById("mv3").value = mv;
									document.getElementById("mue3").value = mue;
									document.getElementById("muh3").value = muh;
									document.getElementById("me3").value = me;
									document.getElementById("mh3").value = mh;
									document.getElementById("srh3").value = srh;
									document.getElementById("b3").value = b;
									document.getElementById("na3").value = na;
									document.getElementById("nd3").value = nd;
									document.getElementById("xn3").value = xn;
									document.getElementById("xp3").value = xp;
									document.getElementById("lamda3").value = lamda;
									document.getElementById("eg3").value = eg;
									document.getElementById("C3").value = 1;
									}else if(x=="Si.5714Ge.428"){
											var mc=1;
											var mv=1;
											var mue=0.246916;
											var muh=0.107033;
											var me=0.2411*9.1e-31;
											var mh= 0.28*9.1e-31;
											var srh= 1e-5;
											var b=7.5e-16;
											var na=1e23;
											var nd=2e24;
											var xn=400e-9;
											var xp=100e-9;
											var lamda=1.3055e-6;
											var eg=0.8;


											document.getElementById("mc3").value = mc;
											document.getElementById("mv3").value = mv;
											document.getElementById("mue3").value = mue;
											document.getElementById("muh3").value = muh;
											document.getElementById("me3").value = me;
											document.getElementById("mh3").value = mh;
											document.getElementById("srh3").value = srh;
											document.getElementById("b3").value = b;
											document.getElementById("na3").value = na;
											document.getElementById("nd3").value = nd;
											document.getElementById("xn3").value = xn;
											document.getElementById("xp3").value = xp;
											document.getElementById("lamda3").value = lamda;
											document.getElementById("eg3").value = eg;
											document.getElementById("C3").value = 1;
											}





							}

							function myFunction4() {
								var x = document.getElementById("mySelect4").value;
								console.log(x)
								if(x=="GaInP2"){

								var mc=1;
								var mv=3;
								var mue=0.4;
								var muh=0.02;
								var me=0.155*9.1e-31;
								var mh= 0.460*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=1e23;
								var nd=2e24;
							//	var xn=208e-9;
							//	var xp=100e-9;
								var xn=100e-9;
						  	var xp=208e-9;
								var lamda=0.65428e-6;
								//var eg=1.9;
								var eg=1.9;

								document.getElementById("mc4").value = mc;
								document.getElementById("mv4").value = mv;
								document.getElementById("mue4").value = mue;
								document.getElementById("muh4").value = muh;
								document.getElementById("me4").value = me;
								document.getElementById("mh4").value = mh;
								document.getElementById("srh4").value = srh;
								document.getElementById("b4").value = b;
								document.getElementById("na4").value = na;
								document.getElementById("nd4").value = nd;
								document.getElementById("xn4").value = xn;
								document.getElementById("xp4").value = xp;
								document.getElementById("lamda4").value = lamda;
								document.getElementById("eg4").value = eg;
								document.getElementById("C4").value = 1;
								}else if(x=="GaAs"){

								var mc=1;
								var mv=1;
								var mue=0.2322;
								var muh=0.02;
								var me=0.067*9.1e-31;
								var mh= 0.473*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=9e23;
								var nd=7.8e23;
								var xn=300e-9;
								var xp=100e-9;
								var lamda=0.875e-6;
								var eg=1.42;

								document.getElementById("mc4").value = mc;
								document.getElementById("mv4").value = mv;
								document.getElementById("mue4").value = mue;
								document.getElementById("muh4").value = muh;
								document.getElementById("me4").value = me;
								document.getElementById("mh4").value = mh;
								document.getElementById("srh4").value = srh;
								document.getElementById("b4").value = b;
								document.getElementById("na4").value = na;
								document.getElementById("nd4").value = nd;
								document.getElementById("xn4").value = xn;
								document.getElementById("xp4").value = xp;
								document.getElementById("lamda4").value = lamda;
								document.getElementById("eg4").value = eg;
								document.getElementById("C4").value = 1;
								}else if(x=="ge"){
								var mc=1;
								var mv=1;
								var mue=0.39;
								var muh=0.19;
								var me=1.64*9.1e-31;
								var mh= 0.28*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=1e23;
								var nd=2e24;
								var xn=400e-9;
								var xp=100e-9;
								var lamda=1.775e-6;
								var eg=0.67;

								document.getElementById("mc4").value = mc;
								document.getElementById("mv4").value = mv;
								document.getElementById("mue4").value = mue;
								document.getElementById("muh4").value = muh;
								document.getElementById("me4").value = me;
								document.getElementById("mh4").value = mh;
								document.getElementById("srh4").value = srh;
								document.getElementById("b4").value = b;
								document.getElementById("na4").value = na;
								document.getElementById("nd4").value = nd;
								document.getElementById("xn4").value = xn;
								document.getElementById("xp4").value = xp;
								document.getElementById("lamda4").value = lamda;
								document.getElementById("eg4").value = eg;
								document.getElementById("C4").value = 1;
								}else if(x=="GaAs.96Bi.04"){
									var mc=1;
									var mv=1;
									var mue=0.135;
									var muh=0.006;
									//var me=1*9.1e-31;
									var me=0.067*9.1e-31;
								//	var mh= 0.067*9.1e-31;
									var mh= 0.51*9.1e-31;
									var srh= 1e-5;
									var b=7.5e-16;
									var na=3.5e23;
									var nd=1.2e24;
									var xn=100e-9;
									var xp=300e-9;
									var lamda=1.138e-6;
									//var eg=1.09;
										var eg=1.09;

								document.getElementById("mc4").value = mc;
								document.getElementById("mv4").value = mv;
								document.getElementById("mue4").value = mue;
								document.getElementById("muh4").value = muh;
								document.getElementById("me4").value = me;
								document.getElementById("mh4").value = mh;
								document.getElementById("srh4").value = srh;
								document.getElementById("b4").value = b;
								document.getElementById("na4").value = na;
								document.getElementById("nd4").value = nd;
								document.getElementById("xn4").value = xn;
								document.getElementById("xp4").value = xp;
								document.getElementById("lamda4").value = lamda;
								document.getElementById("eg4").value = eg;
								document.getElementById("C4").value = 1;
								}else if(x=="GaAs.95Bi.05"){
									var mc=1;
									var mv=1;
									var mue=0.1350;
									var muh=0.0008;
									var me=0.067*9.1e-31;
									var mh= 0.51*9.1e-31;
									var srh= 1e-5;
									var b=7.5e-16;
									var na=3e23;
									var nd=5.2e23;
									var xn=100e-9;
									var xp=400e-9;
									var lamda=1.141e-6;
									var eg=1.0;


								document.getElementById("mc4").value = mc;
								document.getElementById("mv4").value = mv;
								document.getElementById("mue4").value = mue;
								document.getElementById("muh4").value = muh;
								document.getElementById("me4").value = me;
								document.getElementById("mh4").value = mh;
								document.getElementById("srh4").value = srh;
								document.getElementById("b4").value = b;
								document.getElementById("na4").value = na;
								document.getElementById("nd4").value = nd;
								document.getElementById("xn4").value = xn;
								document.getElementById("xp4").value = xp;
								document.getElementById("lamda4").value = lamda;
								document.getElementById("eg4").value = eg;
								document.getElementById("C4").value = 1;
							}else if(x=="GaAs.94Bi.06"){
								var mc=1;
								var mv=1;
								var mue=0.1330;
								var muh=0.0008;
								var me=0.067*9.1e-31;
								var mh= 0.51*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=2e23;
								var nd=5e23;
								var xn=100e-9;
								var xp=400e-9;
								var lamda=1.332e-6;
								var eg=0.92;


								document.getElementById("mc4").value = mc;
								document.getElementById("mv4").value = mv;
								document.getElementById("mue4").value = mue;
								document.getElementById("muh4").value = muh;
								document.getElementById("me4").value = me;
								document.getElementById("mh4").value = mh;
								document.getElementById("srh4").value = srh;
								document.getElementById("b4").value = b;
								document.getElementById("na4").value = na;
								document.getElementById("nd4").value = nd;
								document.getElementById("xn4").value = xn;
								document.getElementById("xp4").value = xp;
								document.getElementById("lamda4").value = lamda;
								document.getElementById("eg4").value = eg;
								document.getElementById("C4").value = 1;
								}else if(x=="GaAs.92Bi.08"){
									var mc=1;
									var mv=1;
									var mue=0.1310;
									var muh=0.0020;
									var me=0.067*9.1e-31;
									var mh= 0.51*9.1e-31;
									var srh= 1e-5;
									var b=7.5e-16;
									var na=1.5e23;
									var nd=2.4e23;
									var xn=100e-9;
									var xp=500e-9;
									var lamda=1.775e-6;
									var eg=0.704;


									document.getElementById("mc4").value = mc;
									document.getElementById("mv4").value = mv;
									document.getElementById("mue4").value = mue;
									document.getElementById("muh4").value = muh;
									document.getElementById("me4").value = me;
									document.getElementById("mh4").value = mh;
									document.getElementById("srh4").value = srh;
									document.getElementById("b4").value = b;
									document.getElementById("na4").value = na;
									document.getElementById("nd4").value = nd;
									document.getElementById("xn4").value = xn;
									document.getElementById("xp4").value = xp;
									document.getElementById("lamda4").value = lamda;
									document.getElementById("eg4").value = eg;
									document.getElementById("C4").value = 1;
									}else if(x=="Si.5714Ge.428"){
											var mc=1;
											var mv=1;
											var mue=0.246916;
											var muh=0.107033;
											var me=0.2411*9.1e-31;
											var mh= 0.28*9.1e-31;
											var srh= 1e-5;
											var b=7.5e-16;
											var na=1e23;
											var nd=2e24;
											var xn=400e-9;
											var xp=100e-9;
											var lamda=1.3055e-6;
											var eg=0.8;


											document.getElementById("mc4").value = mc;
											document.getElementById("mv4").value = mv;
											document.getElementById("mue4").value = mue;
											document.getElementById("muh4").value = muh;
											document.getElementById("me4").value = me;
											document.getElementById("mh4").value = mh;
											document.getElementById("srh4").value = srh;
											document.getElementById("b4").value = b;
											document.getElementById("na4").value = na;
											document.getElementById("nd4").value = nd;
											document.getElementById("xn4").value = xn;
											document.getElementById("xp4").value = xp;
											document.getElementById("lamda4").value = lamda;
											document.getElementById("eg4").value = eg;
											document.getElementById("C4").value = 1;
											}





							}

							function myFunction5() {
								var x = document.getElementById("mySelect5").value;
								console.log(x)
								if(x=="GaInP2"){

								var mc=1;
								var mv=3;
								var mue=0.4;
								var muh=0.02;
								var me=0.155*9.1e-31;
								var mh= 0.460*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=1e23;
								var nd=2e24;
								var xn=208e-9;
								var xp=100e-9;
								var lamda=0.65428e-6;
								var eg=1.9;

								document.getElementById("mc5").value = mc;
								document.getElementById("mv5").value = mv;
								document.getElementById("mue5").value = mue;
								document.getElementById("muh5").value = muh;
								document.getElementById("me5").value = me;
								document.getElementById("mh5").value = mh;
								document.getElementById("srh5").value = srh;
								document.getElementById("b5").value = b;
								document.getElementById("na5").value = na;
								document.getElementById("nd5").value = nd;
								document.getElementById("xn5").value = xn;
								document.getElementById("xp5").value = xp;
								document.getElementById("lamda5").value = lamda;
								document.getElementById("eg5").value = eg;
								document.getElementById("C5").value = 1;
								}else if(x=="GaAs"){

								var mc=1;
								var mv=1;
								var mue=0.2322;
								var muh=0.02;
								var me=0.067*9.1e-31;
								var mh= 0.473*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=9e23;
								var nd=7.8e23;
								var xn=300e-9;
								var xp=100e-9;
								var lamda=0.875e-6;
								var eg=1.42;

								document.getElementById("mc5").value = mc;
								document.getElementById("mv5").value = mv;
								document.getElementById("mue5").value = mue;
								document.getElementById("muh5").value = muh;
								document.getElementById("me5").value = me;
								document.getElementById("mh5").value = mh;
								document.getElementById("srh5").value = srh;
								document.getElementById("b5").value = b;
								document.getElementById("na5").value = na;
								document.getElementById("nd5").value = nd;
								document.getElementById("xn5").value = xn;
								document.getElementById("xp5").value = xp;
								document.getElementById("lamda5").value = lamda;
								document.getElementById("eg5").value = eg;
								document.getElementById("C5").value = 1;
								}else if(x=="ge"){
								var mc=1;
								var mv=1;
								var mue=0.39;
								var muh=0.19;
								var me=1.64*9.1e-31;
								var mh= 0.28*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=1e23;
								var nd=2e24;
								var xn=400e-9;
								var xp=100e-9;
								var lamda=1.775e-6;
								var eg=0.67;

								document.getElementById("mc5").value = mc;
								document.getElementById("mv5").value = mv;
								document.getElementById("mue5").value = mue;
								document.getElementById("muh5").value = muh;
								document.getElementById("me5").value = me;
								document.getElementById("mh5").value = mh;
								document.getElementById("srh5").value = srh;
								document.getElementById("b5").value = b;
								document.getElementById("na5").value = na;
								document.getElementById("nd5").value = nd;
								document.getElementById("xn5").value = xn;
								document.getElementById("xp5").value = xp;
								document.getElementById("lamda5").value = lamda;
								document.getElementById("eg5").value = eg;
								document.getElementById("C5").value = 1;
								}else if(x=="GaAs.96Bi.04"){
									var mc=1;
									var mv=1;
									var mue=0.135;
									var muh=0.006;
									//var me=1*9.1e-31;
									var me=0.067*9.1e-31;
								//	var mh= 0.067*9.1e-31;
									var mh= 0.51*9.1e-31;
									var srh= 1e-5;
									var b=7.5e-16;
									var na=3.5e23;
									var nd=1.2e24;
									var xn=100e-9;
									var xp=300e-9;
									var lamda=1.138e-6;
									//var eg=1.09;
										var eg=1.09;
								document.getElementById("mc5").value = mc;
								document.getElementById("mv5").value = mv;
								document.getElementById("mue5").value = mue;
								document.getElementById("muh5").value = muh;
								document.getElementById("me5").value = me;
								document.getElementById("mh5").value = mh;
								document.getElementById("srh5").value = srh;
								document.getElementById("b5").value = b;
								document.getElementById("na5").value = na;
								document.getElementById("nd5").value = nd;
								document.getElementById("xn5").value = xn;
								document.getElementById("xp5").value = xp;
								document.getElementById("lamda5").value = lamda;
								document.getElementById("eg5").value = eg;
								document.getElementById("C5").value = 1;
								}else if(x=="GaAs.95Bi.05"){
									var mc=1;
									var mv=1;
									var mue=0.1350;
									var muh=0.0008;
									var me=0.067*9.1e-31;
									var mh= 0.51*9.1e-31;
									var srh= 1e-5;
									var b=7.5e-16;
									var na=3e23;
									var nd=5.2e23;
									var xn=100e-9;
									var xp=400e-9;
									var lamda=1.141e-6;
									var eg=1.0;


								document.getElementById("mc5").value = mc;
								document.getElementById("mv5").value = mv;
								document.getElementById("mue5").value = mue;
								document.getElementById("muh5").value = muh;
								document.getElementById("me5").value = me;
								document.getElementById("mh5").value = mh;
								document.getElementById("srh5").value = srh;
								document.getElementById("b5").value = b;
								document.getElementById("na5").value = na;
								document.getElementById("nd5").value = nd;
								document.getElementById("xn5").value = xn;
								document.getElementById("xp5").value = xp;
								document.getElementById("lamda5").value = lamda;
								document.getElementById("eg5").value = eg;
								document.getElementById("C5").value = 1;
							}else if(x=="GaAs.94Bi.06"){
								var mc=1;
								var mv=1;
								var mue=0.1330;
								var muh=0.0008;
								var me=0.067*9.1e-31;
								var mh= 0.51*9.1e-31;
								var srh= 1e-5;
								var b=7.5e-16;
								var na=2e23;
								var nd=5e23;
								var xn=100e-9;
								var xp=400e-9;
								var lamda=1.332e-6;
								var eg=0.92;

								document.getElementById("mc5").value = mc;
								document.getElementById("mv5").value = mv;
								document.getElementById("mue5").value = mue;
								document.getElementById("muh5").value = muh;
								document.getElementById("me5").value = me;
								document.getElementById("mh5").value = mh;
								document.getElementById("srh5").value = srh;
								document.getElementById("b5").value = b;
								document.getElementById("na5").value = na;
								document.getElementById("nd5").value = nd;
								document.getElementById("xn5").value = xn;
								document.getElementById("xp5").value = xp;
								document.getElementById("lamda5").value = lamda;
								document.getElementById("eg5").value = eg;
								document.getElementById("C5").value = 1;
								}else if(x=="GaAs.92Bi.08"){
									var mc=1;
									var mv=1;
									var mue=0.1310;
									var muh=0.0020;
									var me=0.067*9.1e-31;
									var mh= 0.51*9.1e-31;
									var srh= 1e-5;
									var b=7.5e-16;
									var na=1.5e23;
									var nd=2.4e23;
									var xn=100e-9;
									var xp=500e-9;
									var lamda=1.775e-6;
									var eg=0.704;


									document.getElementById("mc5").value = mc;
									document.getElementById("mv5").value = mv;
									document.getElementById("mue5").value = mue;
									document.getElementById("muh5").value = muh;
									document.getElementById("me5").value = me;
									document.getElementById("mh5").value = mh;
									document.getElementById("srh5").value = srh;
									document.getElementById("b5").value = b;
									document.getElementById("na5").value = na;
									document.getElementById("nd5").value = nd;
									document.getElementById("xn5").value = xn;
									document.getElementById("xp5").value = xp;
									document.getElementById("lamda5").value = lamda;
									document.getElementById("eg5").value = eg;
									document.getElementById("C5").value = 1;
									}else if(x=="Si.5714Ge.428"){
											var mc=1;
											var mv=1;
											var mue=0.246916;
											var muh=0.107033;
											var me=0.2411*9.1e-31;
											var mh= 0.28*9.1e-31;
											var srh= 1e-5;
											var b=7.5e-16;
											var na=1e23;
											var nd=2e24;
											var xn=400e-9;
											var xp=100e-9;
											var lamda=1.3055e-6;
											var eg=0.8;


											document.getElementById("mc5").value = mc;
											document.getElementById("mv5").value = mv;
											document.getElementById("mue5").value = mue;
											document.getElementById("muh5").value = muh;
											document.getElementById("me5").value = me;
											document.getElementById("mh5").value = mh;
											document.getElementById("srh5").value = srh;
											document.getElementById("b5").value = b;
											document.getElementById("na5").value = na;
											document.getElementById("nd5").value = nd;
											document.getElementById("xn5").value = xn;
											document.getElementById("xp5").value = xp;
											document.getElementById("lamda5").value = lamda;
											document.getElementById("eg5").value = eg;
											document.getElementById("C5").value = 1;
											}





							}
