select s.matric_no , s.stud_name, code_subject , sem_stud , session_stud , status_lab , status_lec , week
from student s, stud_subj ss , attendance a


where s.stud_bil = ss.stud_bil 
and ss.stud_subj = a.stud_subj 
and sem_stud = '&enter_sem' and session_stud = '&enter_session';
