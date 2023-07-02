select 
	tf2.codsubvar, 
	tf.idgestion,
	tf.codform,
	tf.codgrup,
	tf.desgrup,
	tf.desabrev,
	tf.genero,
	tf.vigente,
	tf2.codvariabl,
	tf2.desvariabl,
	tf2.ordenvar,
	tf2.vigente,
	tf2.bloqueo
from t_formgrup tf 
inner join .t_formsubvar tf2 
on tf.codgrup = tf2.codgrup 
where  tf.idgestion  = tf2.idgestion
	and tf.codform  = tf2.codform 