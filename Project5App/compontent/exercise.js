import { StyleSheet, View, Text, FlatList, ActivityIndicator, Image } from 'react-native';
import React, { } from 'react';
import 'react-native-gesture-handler';

const ExerciseScreen = ({ route, navigation }) => {
  let test = route.params.data.instructionEN.replace(/\\n/g,'\n');
  return (
    <View style={styles.container}>
      <Text style={styles.header}>{route.params.data.titleEN}</Text>
      <Image
        style={{ width: '100%', height: '40%' }}
        source={{ uri: route.params.data.media }}
      />
      <Text style={styles.text}>{test}</Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#e9f7f7',
    alignItems: 'center',
  },
  header: {
    marginTop: 50,
    fontSize: 40,
    color: 'black',
  },
  text: {
    top: '5%',
    textAlign: 'center',
    color: 'black',
    fontSize: 20,
  },
});

export default ExerciseScreen